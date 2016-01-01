<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vehiculos Controller
 *
 * @property \App\Model\Table\VehiculosTable $Vehiculos
 */
class VehiculosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('vehiculos', $this->paginate($this->Vehiculos));
        $this->set('_serialize', ['vehiculos']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehiculo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehiculo = $this->Vehiculos->get($id, [
            'contain' => ['Garantias']
        ]);
        $this->set('vehiculo', $vehiculo);
        $this->set('_serialize', ['vehiculo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehiculo = $this->Vehiculos->newEntity();
        if ($this->request->is('post')) {
            $vehiculo = $this->Vehiculos->patchEntity($vehiculo, $this->request->data);
            if ($this->Vehiculos->save($vehiculo)) {
                $this->Flash->success(__('The vehiculo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehiculo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vehiculo'));
        $this->set('_serialize', ['vehiculo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehiculo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehiculo = $this->Vehiculos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehiculo = $this->Vehiculos->patchEntity($vehiculo, $this->request->data);
            if ($this->Vehiculos->save($vehiculo)) {
                $this->Flash->success(__('The vehiculo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehiculo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vehiculo'));
        $this->set('_serialize', ['vehiculo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehiculo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehiculo = $this->Vehiculos->get($id);
        if ($this->Vehiculos->delete($vehiculo)) {
            $this->Flash->success(__('The vehiculo has been deleted.'));
        } else {
            $this->Flash->error(__('The vehiculo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
