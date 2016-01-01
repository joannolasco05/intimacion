<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fiadores Controller
 *
 * @property \App\Model\Table\FiadoresTable $Fiadores
 */
class FiadoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('fiadores', $this->paginate($this->Fiadores));
        $this->set('_serialize', ['fiadores']);
    }

    /**
     * View method
     *
     * @param string|null $id Fiadore id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fiadore = $this->Fiadores->get($id, [
            'contain' => []
        ]);
        $this->set('fiadore', $fiadore);
        $this->set('_serialize', ['fiadore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fiadore = $this->Fiadores->newEntity();
        if ($this->request->is('post')) {
            $fiadore = $this->Fiadores->patchEntity($fiadore, $this->request->data);
            if ($this->Fiadores->save($fiadore)) {
                $this->Flash->success(__('The fiadore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fiadore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fiadore'));
        $this->set('_serialize', ['fiadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fiadore id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fiadore = $this->Fiadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fiadore = $this->Fiadores->patchEntity($fiadore, $this->request->data);
            if ($this->Fiadores->save($fiadore)) {
                $this->Flash->success(__('The fiadore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fiadore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fiadore'));
        $this->set('_serialize', ['fiadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fiadore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fiadore = $this->Fiadores->get($id);
        if ($this->Fiadores->delete($fiadore)) {
            $this->Flash->success(__('The fiadore has been deleted.'));
        } else {
            $this->Flash->error(__('The fiadore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
