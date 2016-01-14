<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Data
 *
 * @author quyvu-pc
 */

App::uses('AppModel', 'Model');

class Data extends AppModel{
    
    public $time;
    public $nodeid;
    public $longtitude;
    public $latitude;
    public $data1;
    public $data2;
    
    public $belongsTo = array(
        'Node' => array(
            'className' => 'Node',
            'foreignKey' => 'nodeid'
        )
    );
    
}
