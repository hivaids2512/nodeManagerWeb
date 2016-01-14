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
class userController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny('index', 'map', 'statistic', 'data');
        if ($this->Auth->user()) {
            if ($this->Auth->user('roleid') != 3) {
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

    public function tcp() {
        $this->Session->setFlash($this->Auth->user('username'), 'default', array('class' => 'username'), 'username');
        $this->set('title', "Statistic");
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
