<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Permitir aos usuários se registrarem e efetuar logout.
        // Você não deve adicionar a ação de "login" a lista de permissões.
        // Isto pode causar problemas com o funcionamento normal do AuthComponent.
        $this->viewBuilder()->setLayout('login');
        $this->Auth->allow(['logout', 'add', 'edit','view']);
    }
    
   // public function beforeRender(Event $event)
   //  {
   //       parent::beforeRender($event);
   //       $user = $this->Auth->user();
   //       $this->set('user', $user);       
          
   //  }

    public function admin(){

        $this->viewBuilder()->setLayout('adminpanel');
        $this->sendUsername();
        //$this->setAction('sendUsername');    
        
    }

    public function login()
    {
        // if ($this->request->is('post')) {
        //       $user = $this->User->login($this->data);
        //       if ($user) {
        //        $this->Auth->setUser($user);
        //        return $this->redirect($this->Auth->redirectUrl());
        //       }

        //       $this->Flash->error(__('Usuário ou senha inválido, tente novamente.'));

        //    }

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário ou senha inválido, tente novamente.'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O usuário foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O usuário não foi salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

   
   //****************Controles associados a métodos *********************
   public function listmetodos()
    {
        $this->viewBuilder()->setLayout('listmethods');
        $this->loadModel('Metodos');
        // $metodos = $this->Metodos->find('all', ['contain' => ['cod_metodo', 'nome', 'created', 'modified']]);
        // $this->set('metodos',$metodos);
        $metodos = $this->paginate($this->Metodos);

        $this->set(compact('metodos'));
         $this->sendUsername();
    }


    public function addmetodo(){

        $this->viewBuilder()->setLayout('adminpanel');
        $this->loadModel('Metodos');
        $metodo = $this->Metodos->newEntity();
        if ($this->request->is('post')) {
            $metodo = $this->Metodos->patchEntity($metodo, $this->request->getData());
            if ($this->Metodos->save($metodo)) {
                $this->Flash->success(__('O método foi salvo com êxito!'));

                return $this->redirect(['action' => 'admin']);
            }
            $this->Flash->error(__(' O método não foi salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('metodo'));
        $this->sendUsername();
    }

    public function editarmetodo($id = null)
    {
        $this->viewBuilder()->setLayout('adminpanel');
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
        $this->sendUsername();
    }

    
    public function vermetodo($id = null)
    {
        $this->viewBuilder()->setLayout('adminpanel');
        $this->loadModel('Metodos');
        $metodo = $this->Metodos->get($id, [
            'contain' => []
        ]);

        $this->set('metodo', $metodo);
         $this->sendUsername();
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

//********Controles associados a Imagens de notícias e eventos *******

//Listagem das imagens registradas, associadas aos respectivos eventos
    public function listimages()
    {
        $this->viewBuilder()->setLayout('adminpanel');
        $this->loadModel('Imagesevents');
        $this->paginate = [
            'contain' => ['Noticias']
        ];
        $imagesevents = $this->paginate($this->Imagesevents);

        $this->set(compact('imagesevents'));
        $this->sendUsername();
    }

//Adicionar imagem para notícias e eventos
    public function addimage()
    {
        $this->viewBuilder()->setLayout('adminpanel');
        $this->loadModel('Imagesevents');
        $imagesevent = $this->Imagesevents->newEntity();
        if ($this->request->is('post')) {

            if(!empty($this->request->data['imagem']['name']))
            {
                  $filename = $this->request->data['imagem']['name'];
                  $uploadPath = 'img/fotos/noticias/';
                  $uploadFile = $uploadPath . $filename;
                  if(move_uploaded_file($this->request->data['imagem']['tmp_name'], $uploadFile))
                    {
                       $this->request->data['imagem'] = $filename;
                    }
            }//End

            $imagesevent = $this->Imagesevents->patchEntity($imagesevent, $this->request->getData());
            if ($this->Imagesevents->save($imagesevent)) {
                $this->Flash->success(__('A imagem foi salva com êxito!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A imagem não pôde ser salva. Por favor, tente novamente.'));
        }
        $noticias = $this->Imagesevents->Noticias->find('list', ['limit' => 200]);
        $this->set(compact('imagesevent', 'noticias'));
        $this->sendUsername();
    }


//Editar imagem para notícias e eventos

public function editimage($id = null)
    {
        $this->viewBuilder()->setLayout('adminpanel');
        $this->loadModel('Imagesevents');
        $imagesevent = $this->Imagesevents->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {

            //Rotina para definir o destino da imagem
           if(!empty($this->request->data['imagem']['name']))
            {
                  $filename = $this->request->data['imagem']['name'];
                  $uploadPath = 'img/fotos/noticias/s/';
                  $uploadFile = $uploadPath . $filename;
                  if(move_uploaded_file($this->request->data['imagem']['tmp_name'], $uploadFile))
                    {
                       $this->request->data['imagem'] = $filename;
                    }
            }else if (empty($this->request->data['imagem']['name']) && $imagesevent->imagem !== null){
                
                  $filename = $imagesevent['imagem'];
                  $uploadPath = 'img/fotos/noticias/';
                  $uploadFile = $uploadPath . $filename;
                  $file = new File($uploadFile);
                  $file->delete();
                  $file->close();
            } //End

            $imagesevent = $this->Imagesevents->patchEntity($imagesevent, $this->request->getData());
            if ($this->Imagesevents->save($imagesevent)) {
                $this->Flash->success(__('O imagem foi salva com êxito!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A imagem não pôde ser salva. Por favor, tente novamente.'));
        }
        $noticias = $this->Imagesevents->Noticias->find('list', ['limit' => 200]);
        $this->set(compact('imagesevent', 'noticias'));
        $this->sendUsername();
    }

   public function delimage($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagesevent = $this->Imagesevents->get($id);
        if ($this->Imagesevents->delete($imagesevent)) {
            $this->Flash->success(__('A imagem foi exluída com êxito.'));
        } else {
            $this->Flash->error(__('A imagem não foi excluída. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    //Carrega nas páginas do gerenciador o username de quem autenticou-se*******
    public function sendusername(){

        $user = $this->Auth->user();
        $this->set('user', $user);
    }
}
