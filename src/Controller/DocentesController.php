<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Docentes Controller
 *
 * @property \App\Model\Table\DocentesTable $Docentes
 *
 * @method \App\Model\Entity\Docente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocentesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $docentes = $this->paginate($this->Docentes);

        $this->set(compact('docentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $docente = $this->Docentes->get($id, [
            'contain' => ['Discentes']
        ]);

        $this->set('docente', $docente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $docente = $this->Docentes->newEntity();
        if ($this->request->is('post')) {
            //codigo para salvar fotos de docentes no servidor
            if(!empty($this->request->data['photo']['name']))
            {
                  $filename = $this->request->data['photo']['name'];
                  $uploadPath = 'img/fotos/docentes/';
                  $uploadFile = $uploadPath . $filename;
                  if(move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile))
                    {
                       $this->request->data['photo'] = $filename;
                    }
            }//End

            $docente = $this->Docentes->patchEntity($docente, $this->request->getData());
            if ($this->Docentes->save($docente)) {
                $this->Flash->success(__('The docente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docente could not be saved. Please, try again.'));
        }
        $this->set(compact('docente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $docente = $this->Docentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
           //Rotina para definir o destino da foto do docente
           if(!empty($this->request->data['photo']['name']))
            {
                  $filename = $this->request->data['photo']['name'];
                  $uploadPath = 'img/fotos/docentes/';
                  $uploadFile = $uploadPath . $filename;
                  if(move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile))
                    {
                       $this->request->data['photo'] = $filename;
                    }
            }else if (empty($this->request->data['photo']['name']) && $docente->photo !== null){
                
                  $filename = $docente['photo'];
                  $uploadPath = 'img/fotos/docentes/';
                  $uploadFile = $uploadPath . $filename;
                  $file = new File($uploadFile);
                  $file->delete();
                  $file->close();
            } //End
         
            $docente = $this->Docentes->patchEntity($docente, $this->request->getData());
            if ($this->Docentes->save($docente)) {
                $this->Flash->success(__('The docente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docente could not be saved. Please, try again.'));
        }
        $this->set(compact('docente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $docente = $this->Docentes->get($id);
        //Gera o path da foto a ser excluida do diretorio no servidor
        $filename = $docente->photo;
        $dir = 'img/fotos/docentes/' . $filename;
        if ($this->Docentes->delete($docente)) {
            //Exclui a foto do docente do diretorio no servidor
             $file = new File($dir);
             $file->delete();
             $file->close();
             //End
            $this->Flash->success(__('The docente has been deleted.'));
        } else {
            $this->Flash->error(__('The docente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
