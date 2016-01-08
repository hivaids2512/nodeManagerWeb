<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel', 'Model');

class User extends AppModel {
    
    public $id;
    public $joindate;
    public $address;
    public $phone;
    public $roleid;
    
    public $validate = array(
        'username' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required',
                'allowEmpty' => false
            ),
            'between' => array( 
                'rule' => array('between', 2, 15), 
                'required' => true, 
                'message' => 'Usernames must be between 5 to 15 characters'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'This username is already exist'
    ),
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A password is required'
            ),
            'min_length' => array(
                'rule' => array('minLength', '6'),  
                'message' => 'Password must have a mimimum of 6 characters'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => array('email', true),    
                'message' => 'Please provide a valid email address.'   
            ),
            'between' => array( 
                'rule' => array('between', 3, 60), 
                'message' => 'Email must be between 6 to 60 characters'
            )
        ),
        'firstname' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'Firstname is required',
                'allowEmpty' => false
            )
        ),
        'lastname' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'Lastname is required',
                'allowEmpty' => false
            )
        ),
        'roleid' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'Role is required',
                'allowEmpty' => false
            )
        ),
        'address' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'Address is required',
                'allowEmpty' => false
            )
        ),
        'phone' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'Phone is required',
                'allowEmpty' => false
            )
        ),
    );
     
    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new BlowfishPasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
        $this->data[$this->alias]['id'] = 0;
    }
    return true;
    }
 
}
