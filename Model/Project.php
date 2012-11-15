<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property Bug $Bug
 * @property Feature $Feature
 */
class Project extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Bugs' => array(
			'className' => 'Bug',
			'foreignKey' => 'project_id',
			'dependent' => false,
/*			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''*/
		),
		'UnActionedBugs' => array(
			'className' => 'Bug',
			'foreignKey' => 'project_id',
			'dependent' => false,
			'conditions' => array('UnActionedBugs.state' => 0),
/*			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''*/
		),
		'ClosedBugs' => array(
			'className' => 'Bug',
			'foreignKey' => 'project_id',
			'dependent' => false,
			'conditions' => array('ClosedBugs.state' => 1),
/*			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''*/
		),
		'OpenBugs' => array(
			'className' => 'Bug',
			'foreignKey' => 'project_id',
			'dependent' => false,
			'conditions' => array('OpenBugs.state' => 2),
/*			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''*/
		),
		'ConfirmedBugs' => array(
			'className' => 'Bug',
			'foreignKey' => 'project_id',
			'dependent' => false,
			'conditions' => array('ConfirmedBugs.state >' => 1),	// 2 + 3
/*			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''*/
		),
		'ResolvedBugs' => array(
			'className' => 'Bug',
			'foreignKey' => 'project_id',
			'dependent' => false,
			'conditions' => array('ResolvedBugs.state' => 3),
/*			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''*/
		),
		'Features' => array(
			'className' => 'Feature',
			'foreignKey' => 'project_id',
			'dependent' => false,
/*			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''*/
		)
	);

}
