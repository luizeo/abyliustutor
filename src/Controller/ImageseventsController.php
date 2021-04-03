<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Imagesevents Controller
 *
 * @property \App\Model\Table\ImageseventsTable $Imagesevents
 *
 * @method \App\Model\Entity\Imagesevent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImageseventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Noticias']
        ];
        $imagesevents = $this->paginate($this->Imagesevents);

        $this->set(compact('imagesevents'));
    }

    /**
     * View method
     *
     * @param string|null $id Imagesevent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagesevent = $this->Imagesevents->get($id, [
            'contain' => ['Noticias']
        ]);

        $this->set('imagesevent', $imagesevent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagesevent = $this->Imagesevents->newEntity();
        if ($this->request->is('post')) {
            $imagesevent = $this->Imagesevents->patchEntity($imagesevent, $this->request->getData());
            if ($this->Imagesevents->save($imagesevent)) {
                $this->Flash->success(__('The imagesevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagesevent could not be saved. Please, try again.'));
        }
        $noticias = $this->Imagesevents->Noticias->find('list', ['limit' => 200]);
        $this->set(compact('imagesevent', 'noticias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagesevent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagesevent = $this->Imagesevents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagesevent = $this->Imagesevents->patchEntity($imagesevent, $this->request->getData());
            if ($this->Imagesevents->save($imagesevent)) {
                $this->Flash->success(__('The imagesevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagesevent could not be saved. Please, try again.'));
        }
        $noticias = $this->Imagesevents->Noticias->find('list', ['limit' => 200]);
        $this->set(compact('imagesevent', 'noticias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagesevent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagesevent = $this->Imagesevents->get($id);
        if ($this->Imagesevents->delete($imagesevent)) {
            $this->Flash->success(__('The imagesevent has been deleted.'));
        } else {
            $this->Flash->error(__('The imagesevent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
