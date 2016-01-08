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
class loginController extends AppController {
        
        public function beforeFilter()
	{   
            parent::beforeFilter();
            $this->Auth->allow('index','dologin','dologout');
             
	}
    
        public function index() {
            if($this->Auth->loggedIn()){
                return $this->redirect(array('controller' => 'admin', 'action' => 'index'));
            }
            $this->layout = 'login';
		
	}
        
        public function dologin(){
            if ($this->request->is('post')) {         
                if ($this->Auth->login()) {
                    $this->redirect($this->Auth->redirectUrl());
                } else {
                    $this->Session->setFlash('Wrong Username or Password! Try again.', 'default', array(), 'loginError' );
                    $this->redirect(array('controller' => 'login', 'action' => 'index')); 
                }
            } 
            throw new NotFoundException();
        }
        
        public function dologout(){
            return $this->redirect($this->Auth->logout());
        }
        
        /*public function save() {
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
