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
class adminController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny('index', 'map', 'statistic', 'data', 'addnode', 'nodeconfig', 'editnode', 'user', 'setting', 'newnode', 'updatenode');
        /*
        $action = $this->request['action'];
        $adminAllowList = array('index', 'map', 'statistic', 'data', 'tcp', 'user', 'setting', 'userdata');
        $managerAllowList = array('index', 'map', 'statistic', 'data', 'user');
        $userAllowList = array('index', 'map', 'statistic', 'data');
         */
        if ($this->Auth->user()) {
            if ($this->Auth->user('roleid') != 1) {
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
        //throw new ForbiddenException();
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
        $this->loadModel('Data');
        $data = $this->Data->find('all');
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Data");
        $this->set('Data', $data );
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
            
            $this->redirect(array('controller' => 'admin', 'action' => 'editnode', $id));
        }
        $this->layout = false;
    }
    
    public function adduser() {
        if($this->request->is('post')){
            $this->loadModel('User');
            $this->User->set($this->request->data);
            if($this->User->save()){
               $this->Session->write('create', 'Ok');
            }else{
                $this->Session->write('creates', $this->User->validationErrors);
            }
            
            $this->redirect(array('controller' => 'admin', 'action' => 'user'));
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
            
            $this->redirect(array('controller' => 'admin', 'action' => 'addnode'));
        }
        $this->layout = false;
    }
    
    /*
    public function save() {
            $this->loadModel('User');
            $user = new User();
            $user->id= 0;
            $user->username = 'admisn';
            $user->password = 'admin123';
            $user->email = 'tranquy2512@gmail.com';
            $user->firstname = 'Quy';
            $user->lastname = 'Vu';
            $user->joindate = '2015-08-07 21:55:46';
            $user->address = 'Dong Nai';
            $user->phone = '0936295904';
            $user->roleid = 1;
            $this->User->save($user);
        }*/

}
