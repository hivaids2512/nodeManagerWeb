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
class DataController extends AppController {
    
        public $components = array('RequestHandler');

        public function index() {
            $this->set(array(
            'message' => 'asd',
            '_serialize' => array('message')
        ));
	}
        
        public function add(){
            
        }
        
        public function view(){
            
        }
        
        public function edit($id) {
            $node = $this->request->data['node'];
            $from = $this->request->data['from'];
            $to = $this->request->data['to'];
            $this->loadModel('Data');
            $data = $this->Data->find('all', array('conditions' => array('Data.nodeid' => $node , 'Data.time >=' => $from , 'Data.time <=' => $to  )));
            $this->set(array(
            'data' => $data,
            '_serialize' => array('data')
        ));
        }
        
        public function delete(){
            
        }
}
