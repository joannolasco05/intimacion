<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Garantias Controller
 *
 * @property \App\Model\Table\GarantiasTable $Garantias
 */
class GarantiasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes', 'Vehiculos', 'Prestamos']
        ];
        $this->set('garantias', $this->paginate($this->Garantias));
        $this->set('_serialize', ['garantias']);
    }

    /**
     * View method
     *
     * @param string|null $id Garantia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $garantia = $this->Garantias->get($id, [
            'contain' => ['Clientes', 'Vehiculos', 'Prestamos']
        ]);
        $this->set('garantia', $garantia);
        $this->set('_serialize', ['garantia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $garantia = $this->Garantias->newEntity();
        if ($this->request->is('post')) {
            $garantia = $this->Garantias->patchEntity($garantia, $this->request->data);
            if ($this->Garantias->save($garantia)) {
                $this->Flash->success(__('The garantia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The garantia could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Garantias->Clientes->find('list', ['limit' => 200]);
        $vehiculos = $this->Garantias->Vehiculos->find('list', ['limit' => 200]);
        $prestamos = $this->Garantias->Prestamos->find('list', ['limit' => 200]);
        $this->set(compact('garantia', 'clientes', 'vehiculos', 'prestamos'));
        $this->set('_serialize', ['garantia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Garantia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $garantia = $this->Garantias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $garantia = $this->Garantias->patchEntity($garantia, $this->request->data);
            if ($this->Garantias->save($garantia)) {
                $this->Flash->success(__('The garantia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The garantia could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Garantias->Clientes->find('list', ['limit' => 200]);
        $vehiculos = $this->Garantias->Vehiculos->find('list', ['limit' => 200]);
        $prestamos = $this->Garantias->Prestamos->find('list', ['limit' => 200]);
        $this->set(compact('garantia', 'clientes', 'vehiculos', 'prestamos'));
        $this->set('_serialize', ['garantia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Garantia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $garantia = $this->Garantias->get($id);
        if ($this->Garantias->delete($garantia)) {
            $this->Flash->success(__('The garantia has been deleted.'));
        } else {
            $this->Flash->error(__('The garantia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
