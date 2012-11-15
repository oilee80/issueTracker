<?php
App::uses('AppModel', 'Model');
/**
 * Feature Model
 *
 * @property Project $Project
 * @property FeatureComment $FeatureComment
 * @property FeatureRevision $FeatureRevision
 */
class Feature extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'FeatureComment' => array(
			'className' => 'FeatureComment',
			'foreignKey' => 'feature_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'FeatureRevision' => array(
			'className' => 'FeatureRevision',
			'foreignKey' => 'feature_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
