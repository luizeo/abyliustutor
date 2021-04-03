<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\ORM\Query;

Class SitesController extends AppController{
  
  function index(){

  	$this->viewBuilder()->setLayout('portal');
  	//$this->loadModel('Imagesevents');
    $this->getImagensNoticias();
    $this->getTutoriais();
    
  }

public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['/', 'index']);
    }

public function getImagensNoticias(){

    $imagesevents = TableRegistry::get('Imagesevents');
    $query = $imagesevents->find('all')->contain(['Noticias'])->limit(3);
    $this->set('imagesevents',$query);

}

public function getTutoriais(){

    $metodos = TableRegistry::get('Metodos');
    $query = $metodos->find()->select(['cod_metodo','nome','video'])->limit(4);
    $this->set('metodos',$query);
  
 }
}

?>