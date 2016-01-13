<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Error\Debugger;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

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
    
    public function isAuthorized($user){
        return true;
    }
    
    public function init(){
        $intimacione = $this->Intimaciones->newEntity();
        $time = new Time('15 days ago');
        $cuotas_table = TableRegistry::get('Cuotas');
        if ($this->request->is('post')) {
           $keys = array_keys($this->request->data);
           foreach($keys as $key){
              if($this->request->data[$key] === '1'){
                $resultsArray = $cuotas_table->find()->select(['prestamo_id', 'Prestamos.cliente_id'])->contain(['Prestamos'])->where(['Cuotas.id' => $key])->toArray();  
                foreach ($resultsArray as $cuota) {
                    $total = $this->Intimaciones->find()->where(['prestamo_id' => $cuota->prestamo_id])->count();
                    if($total==0){
                        $data = array(
                            'prestamo_id' => $cuota->prestamo_id,
                            'cliente_id' => "".$cuota->prestamo->cliente_id."",
                            'status' => 'PENDIENTE'
                        );
                        $intimacione = $this->Intimaciones->patchEntity($intimacione, $data);
                        $this->Intimaciones->save($intimacione);
                    }
                }
              }
           }   
        }
        $cuotas_pending = $cuotas_table->find('all')->contain(['Prestamos'])->where(['status' => 'PENDIENTE'])->where(['fecha_limite <=' => $time])->where(['prestamo_id NOT IN' => ($this->Intimaciones->find()->select('prestamo_id'))]);
        $this->set('cuotas', $this->paginate($cuotas_pending));
        $this->set('_serialize', ['cuotas']);
    }
}
