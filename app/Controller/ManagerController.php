<?php

/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class managerController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny('index', 'map', 'statistic', 'data', 'addnode', 'nodeconfig', 'editnode', 'updatenode', 'newnode');
        if ($this->Auth->user()) {
            if ($this->Auth->user('roleid') != 2) {
                throw new ForbiddenException();
            }
        }
    }

    public function index() {
        $this->loadModel('Node');
        $node = $this->Node->find('all');
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Dashboard");
        $this->set('Node', $node);
    }

    public function map() {
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Map");
        $this->layout = false;
    }

    public function statistic() {
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Statistic");
        $this->layout = false;
    }

    public function data() {
        $this->loadModel('Node');
        $this->loadModel('Data');
        $node = $this->Node->find('all');
        $data = $this->Data->find('all');
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Data");
        $this->set('Node', $node );
        $this->set('Data', $data );
        $this->layout = false;
    }

    public function addnode() {
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Add New Node");
        $this->layout = false;
    }
    
    public function nodeconfig() {
        $this->loadModel('Node');
        $node = $this->Node->find('all');
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Data");
        $this->set('Node', $node );
        $this->layout = false;
    }
    
    public function editnode($id) {
        $this->loadModel('Node');
        $node = $this->Node->find('all', array('conditions' => array('Node.nodeid' => $id)));
        
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Edit Node");
        if($node != null){
            $this->set('node', $node);
        }else{
            throw new NotFoundException();
        }
        
        $this->layout = false;
    }
    
    public function updatenode() {
        
        if($this->request->is('post')){
            $id = $this->request->data['Node']['nodeid'];
            $this->loadModel('Node');
            $this->Node->set($this->request->data);
            if($this->Node->save()){
               $this->Session->write('create', 'Ok');
            }else{
                $this->Session->write('creates', $this->Node->validationErrors);
            }
            
            $this->redirect(array('controller' => 'manager', 'action' => 'editnode', $id));
        }
        $this->layout = false;
    }
    
    public function newnode() {
        if($this->request->is('post')){
            $this->loadModel('Node');
            $this->Node->set($this->request->data);
            if($this->Node->save()){
               $this->Session->write('create', 'Ok');
            }else{
                $this->Session->write('creates', $this->Node->validationErrors);
            }
            
            $this->redirect(array('controller' => 'manager', 'action' => 'addnode'));
        }
        $this->layout = false;
    }

    public function user() {
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "User");
        $this->layout = false;
    }

    public function setting() {
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Statistic");
        $this->layout = false;
    }

    public function userdata() {
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Statistic");
        $this->layout = false;
    }

}
