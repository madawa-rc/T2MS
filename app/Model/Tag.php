<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property Locality $Locality
 */
class Tag extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'locality_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tag' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Locality' => array(
			'className' => 'Locality',
			'foreignKey' => 'locality_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
