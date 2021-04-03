<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Discentes Controller
 *
 * @property \App\Model\Table\DiscentesTable $Discentes
 *
 * @method \App\Model\Entity\Discente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiscentesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Docentes']
        ];
        $discentes = $this->paginate($this->Discentes);

        $this->set(compact('discentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Discente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discente = $this->Discentes->get($id, [
            'contain' => ['Docentes']
        ]);

        $this->set('discente', $discente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discente = $this->Discentes->newEntity();
        if ($this->request->is('post')) {
            
            //codigo para salvar fotos de discentes no servidor
            if(!empty($this->request->data['photo']['name']))
            {
                  $filename = $this->request->data['photo']['name'];
                  $uploadPath = 'img/fotos/discentes/';
                  $uploadFile = $uploadPath . $filename;
                  if(move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile))
                    {
                       $this->request->data['photo'] = $filename;
                    }
            }//End

            $discente = $this->Discentes->patchEntity($discente, $this->request->getData());
            if ($this->Discentes->save($discente)) {
                $this->Flash->success(__('The discente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discente could not be saved. Please, try again.'));
        }
        $docentes = $this->Discentes->Docentes->find('list', ['limit' => 200]);
        $this->set(compact('discente', 'docentes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Discente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discente = $this->Discentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            //Rotina para definir o destino da foto do discente
           if(!empty($this->request->data['photo']['name']))
            {
                  $filename = $this->request->data['photo']['name'];
                  $uploadPath = 'img/fotos/discentes/';
                  $uploadFile = $uploadPath . $filename;
                  if(move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile))
                    {
                       $this->request->data['photo'] = $filename;
                    }
            }else if (empty($this->request->data['photo']['name']) && $discente->photo !== null){
                
                  $filename = $docente['photo'];
                  $uploadPath = 'img/fotos/discentes/';
                  $uploadFile = $uploadPath . $filename;
                  $file = new File($uploadFile);
                  $file->delete();
                  $file->close();
            } //End

            $discente = $this->Discentes->patchEntity($discente, $this->request->getData());
            if ($this->Discentes->save($discente)) {
                $this->Flash->success(__('The discente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discente could not be saved. Please, try again.'));
        }
        $docentes = $this->Discentes->Docentes->find('list', ['limit' => 200]);
        $this->set(compact('discente', 'docentes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Discente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discente = $this->Discentes->get($id);
        //Gera o path da foto a ser excluida do diretorio no servidor
        $filename = $discente->photo;
        $dir = 'img/fotos/discentes/' . $filename;
        if ($this->Discentes->delete($discente)) {

            //Exclui a foto do discente do diretorio no servidor
             $file = new File($dir);
             $file->delete();
             $file->close();
             //End

            $this->Flash->success(__('The discente has been deleted.'));
        } else {
            $this->Flash->error(__('The discente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
