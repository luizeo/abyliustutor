<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Metodos Controller
 *
 * @property \App\Model\Table\MetodosTable $Metodos
 *
 * @method \App\Model\Entity\Metodo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MetodosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
        $metodos = $this->paginate($this->Metodos);

        $this->set(compact('metodos'));
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function tutorial()
    {
        
        $this->viewBuilder()->setLayout('methods');
        $metodos = $this->Metodos->find()->select(['cod_metodo','nome']);

        $this->set('metodos', $metodos);

        
    }

    /**
     * View method
     *
     * @param string|null $id Metodo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $metodo = $this->Metodos->get($id, [
            'contain' => []
        ]);

        $this->set('metodo', $metodo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $metodo = $this->Metodos->newEntity();
        if ($this->request->is('post')) {
            $metodo = $this->Metodos->patchEntity($metodo, $this->request->getData());
            if ($this->Metodos->save($metodo)) {
                $this->Flash->success(__('The metodo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The metodo could not be saved. Please, try again.'));
        }
        $this->set(compact('metodo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Metodo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $metodo = $this->Metodos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $metodo = $this->Metodos->patchEntity($metodo, $this->request->getData());
            if ($this->Metodos->save($metodo)) {
                $this->Flash->success(__('The metodo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The metodo could not be saved. Please, try again.'));
        }
        $this->set(compact('metodo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Metodo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $metodo = $this->Metodos->get($id);
        if ($this->Metodos->delete($metodo)) {
            $this->Flash->success(__('The metodo has been deleted.'));
        } else {
            $this->Flash->error(__('The metodo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * View method
     *
     * @param string|null $id Metodo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function operation($id = null){

         //$this->autoRender = false;
        $this->viewBuilder()->setLayout('operationtplt');
        //if($this->request->is('ajax')){

            //$this->render(false);
            $met = $this->Metodos->get($id, [
            'contain' => []
        ]);

          // $response = $this->response;
          // $response->body($metodo);
          $this->set('met', $met);
          //return $response;
             // $this->set(compact('metodo'));
             // $this->set('_serialize', 'metodo');
       // }
          $this->tutorial();
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'edit','tutorial','operation', 'add', 'delete']);
    }

}
