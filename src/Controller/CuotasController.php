<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cuotas Controller
 *
 * @property \App\Model\Table\CuotasTable $Cuotas
 */
class CuotasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Prestamos']
        ];
        $this->set('cuotas', $this->paginate($this->Cuotas));
        $this->set('_serialize', ['cuotas']);
    }

    /**
     * View method
     *
     * @param string|null $id Cuota id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cuota = $this->Cuotas->get($id, [
            'contain' => ['Prestamos']
        ]);
        $this->set('cuota', $cuota);
        $this->set('_serialize', ['cuota']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cuota = $this->Cuotas->newEntity();
        if ($this->request->is('post')) {
            $cuota = $this->Cuotas->patchEntity($cuota, $this->request->data);
            if ($this->Cuotas->save($cuota)) {
                $this->Flash->success(__('The cuota has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cuota could not be saved. Please, try again.'));
            }
        }
        $prestamos = $this->Cuotas->Prestamos->find('list', ['limit' => 200]);
        $this->set(compact('cuota', 'prestamos'));
        $this->set('_serialize', ['cuota']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cuota id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cuota = $this->Cuotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cuota = $this->Cuotas->patchEntity($cuota, $this->request->data);
            if ($this->Cuotas->save($cuota)) {
                $this->Flash->success(__('The cuota has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cuota could not be saved. Please, try again.'));
            }
        }
        $prestamos = $this->Cuotas->Prestamos->find('list', ['limit' => 200]);
        $this->set(compact('cuota', 'prestamos'));
        $this->set('_serialize', ['cuota']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cuota id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cuota = $this->Cuotas->get($id);
        if ($this->Cuotas->delete($cuota)) {
            $this->Flash->success(__('The cuota has been deleted.'));
        } else {
            $this->Flash->error(__('The cuota could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
