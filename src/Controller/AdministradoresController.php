<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


/**
 * Administradores Controller
 * Metodos Controller
 * @property \App\Model\Table\AdministradoresTable $Administradores
 *
 * @method \App\Model\Entity\Administradore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministradoresController extends AppController
{
   
        /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $administradores = $this->paginate($this->Administradores);

        $this->set(compact('administradores'));

    }

    public function loginpage(){
 
      $this->viewBuilder()->setLayout('login');

    }

    /**
     * View method
     *
     * @param string|null $id Administradore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administradore = $this->Administradores->get($id, [
            'contain' => []
        ]);

        $this->set('administradore', $administradore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administradore = $this->Administradores->newEntity();
        if ($this->request->is('post')) {
            $administradore = $this->Administradores->patchEntity($administradore, $this->request->getData());
            if ($this->Administradores->save($administradore)) {
                $this->Flash->success(__('The administradore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradore could not be saved. Please, try again.'));
        }
        $this->set(compact('administradore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administradore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administradore = $this->Administradores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administradore = $this->Administradores->patchEntity($administradore, $this->request->getData());
            if ($this->Administradores->save($administradore)) {
                $this->Flash->success(__('O Administrador foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradore could not be saved. Please, try again.'));
        }
        $this->set(compact('administradore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administradore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administradore = $this->Administradores->get($id);
        if ($this->Administradores->delete($administradore)) {
            $this->Flash->success(__('The administradore has been deleted.'));
        } else {
            $this->Flash->error(__('The administradore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

     /**
     * Index method
     *
     * return \Cake\Http\Response|void
     
     */
        public function listmetodos(){

        $this->loadModel('Metodos');
        //$metodos = $this->Metodos->find('all');
        $metodos = $this->paginate($this->Metodos);
        $this->set(compact('metodos'));
        //$this->set('metodos', $metodos );
        //$this->set('_serialize', ['metodos']);
    }

    public function addmetodo(){

        $this->loadModel('Metodos');
        $metodo = $this->Metodos->newEntity();
        if ($this->request->is('post')) {
            $metodo = $this->Metodos->patchEntity($metodo, $this->request->getData());
            if ($this->Metodos->save($metodo)) {
                $this->Flash->success(__('O método foi salvo com êxito!'));

                return $this->redirect(['action' => 'listmetodos']);
            }
            $this->Flash->error(__(' O método não foi salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('metodo'));
    }

    public function editarmetodo($id = null)
    {
        $this->loadModel('Metodos');
        $metodo = $this->Metodos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $metodo = $this->Metodos->patchEntity($metodo, $this->request->getData());
            if ($this->Metodos->save($metodo)) {
                $this->Flash->success(__('O Método foi salvo com êxito!'));

                return $this->redirect(['action' => 'listmetodos']);
            }
            $this->Flash->error(__('O método não pôde ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('metodo'));
    }

    
    public function vermetodo($id = null)
    {
        $this->loadModel('Metodos');
        $metodo = $this->Metodos->get($id, [
            'contain' => []
        ]);

        $this->set('metodo', $metodo);
    }

    public function delmetodo($id = null)
    {
        $this->loadModel('Metodos');
        $this->request->allowMethod(['post', 'delete']);
        $metodo = $this->Metodos->get($id);
        if ($this->Metodos->delete($metodo)) {
            $this->Flash->success(__('O método foi excluido.'));
        } else {
            $this->Flash->error(__('O método não pôde ser excluido. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'listmetodos']);
    }

// public function beforeFilter(Event $event)
// {
//     parent::beforeFilter($event);
//     // Permitir aos usuários se registrarem e efetuar logout.
//     // Você não deve adicionar a ação de "login" a lista de permissões.
//     // Isto pode causar problemas com o funcionamento normal do AuthComponent.
//     $this->Auth->allow(['add', 'logout']);
// }

// public function login()
// {
//     if ($this->request->is('post')) {
//         $administradore = $this->Auth->identify();
//         if ($administradore) {
//             $this->Auth->setUser($administradore);
//             return $this->redirect($this->Auth->redirectUrl());
//         }
//         $this->Flash->error(__('E-mail ou senha ínvalido, tente novamente'));
//     }

//      $administradore = $this->Administradore->login($this->data);

//         if ($administrador) {
//             $this->Session->write('administradore', $administradore);

//             $this->redirect('/');
//         } else {

//             $this->Session->setFlash('Usuário ou senha inválidos.');

//             $this->redirect(array(
//                 'controller' => 'administradores',
//                 'action' => 'login_page'
//             ));

//         }
// }


public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'edit', 'loginpage', 'add','delete','addmetodo','delmetodo','vermetodo','editarmetodo','listmetodos']);
    }
    

 }
