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
class homeController extends AppController {
        
        public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny('index');
        
    }
    
        public function index() {
            $role = $this->Auth->user('roleid');
            if($role == 1){
                $this->redirect(array('controller' => 'admin', 'action' => 'index'));
            }
            else if($role == 2){
                $this->redirect(array('controller' => 'manager', 'action' => 'index'));
            }
            else{
                $this->redirect(array('controller' => 'user', 'action' => 'index'));
            }
	}
}
