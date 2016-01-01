<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Intimaciones Controller
 *
 * @property \App\Model\Table\IntimacionesTable $Intimaciones
 */
class IntimacionesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Prestamos', 'Clientes']
        ];
        $this->set('intimaciones', $this->paginate($this->Intimaciones));
        $this->set('_serialize', ['intimaciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Intimacione id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $intimacione = $this->Intimaciones->get($id, [
            'contain' => ['Prestamos', 'Clientes']
        ]);
        $this->set('intimacione', $intimacione);
        $this->set('_serialize', ['intimacione']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $intimacione = $this->Intimaciones->newEntity();
        if ($this->request->is('post')) {
            $intimacione = $this->Intimaciones->patchEntity($intimacione, $this->request->data);
            if ($this->Intimaciones->save($intimacione)) {
                $this->Flash->success(__('The intimacione has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The intimacione could not be saved. Please, try again.'));
            }
        }
        $prestamos = $this->Intimaciones->Prestamos->find('list', ['limit' => 200]);
        $clientes = $this->Intimaciones->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('intimacione', 'prestamos', 'clientes'));
        $this->set('_serialize', ['intimacione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Intimacione id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $intimacione = $this->Intimaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $intimacione = $this->Intimaciones->patchEntity($intimacione, $this->request->data);
            if ($this->Intimaciones->save($intimacione)) {
                $this->Flash->success(__('The intimacione has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The intimacione could not be saved. Please, try again.'));
            }
        }
        $prestamos = $this->Intimaciones->Prestamos->find('list', ['limit' => 200]);
        $clientes = $this->Intimaciones->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('intimacione', 'prestamos', 'clientes'));
        $this->set('_serialize', ['intimacione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Intimacione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $intimacione = $this->Intimaciones->get($id);
        if ($this->Intimaciones->delete($intimacione)) {
            $this->Flash->success(__('The intimacione has been deleted.'));
        } else {
            $this->Flash->error(__('The intimacione could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
