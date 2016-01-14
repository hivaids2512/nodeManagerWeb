<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel', 'Model');

class Node extends AppModel {

    public $nodeid;
    public $longtitude;
    public $latitude;
    public $nodename;
    public $nodelocation;
    public $other;
    public $primaryKey = 'nodeid';
    public $validate = array(
        'nodeid' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'NodeId is required',
                'allowEmpty' => false
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'This NodeId is already exist'
            ),
        ),
        'nodename' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Node name is required'
            )
        ),
        'nodelocation' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Node location is required'
            ),
        ),
        'longtitude' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'Longtitue is required',
                'allowEmpty' => false
            )
        ),
        'latitude' => array(
            'nonEmpty' => array(
                'rule' => array('notBlank'),
                'message' => 'Latitude is required',
                'allowEmpty' => false
            )
        ),
    );
    public $hasMany = array(
        'Data' => array(
            'className' => 'Data',
            'foreignKey' => 'nodeid',
        //'conditions' => array('Recipe.approved' => '1'),
        //'order' => 'Recipe.created DESC'
        )
    );

}