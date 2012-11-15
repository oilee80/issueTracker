<?php
App::uses('AppModel', 'Model');
/**
 * FeatureRevision Model
 *
 * @property Feature $Feature
 */
class FeatureRevision extends AppModel {

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
