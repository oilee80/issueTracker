<?php
App::uses('AppModel', 'Model');
/**
 * FeatureComment Model
 *
 * @property Feature $Feature
 */
class FeatureComment extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'feature_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'comment' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'Feature' => array(
			'className' => 'Feature',
			'foreignKey' => 'feature_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
