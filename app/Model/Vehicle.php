<?php
App::uses('AppModel', 'Model');
/**
 * Vehicle Model
 *
 */
class Vehicle extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
        var $name = 'Vehicle';
        public $has = array( 'Trip' => array( 'className' => 'Trip' ) );
        public $belongsTo = array(
        'Owner' => array(
            'className' => 'Owner',
            'foreignKey' => 'ownerID'
            )
        );
        
	public $validate = array(
		'driverName' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'driverContact' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'vehicleNum' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fare' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ownerID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
        public function getVehicleList(){
		$vehicles=$this->find('all');
		$vehi=array();
		foreach($vehicles as $vehicle){
			$vehi[$vehicle['Vehicle']['id']]=$vehicle['Vehicle']['id']."-".$vehicle['Vehicle']['driverName']."-".$vehicle['Vehicle']['vehicleNum']."-".$vehicle['Vehicle']['driverContact'];
		}
		return $vehi;
	}
}
