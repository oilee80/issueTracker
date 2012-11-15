<?php
App::uses('AppModel', 'Model');
/**
 * Bug Model
 *
 * @property ParentBug $ParentBug
 * @property Project $Project
 */
class Bug extends AppModel {

	public $actsAs = array(
		'Enum' => array(
			'state' => array(
				'Posted',	// Possible Bug, not yet confirmed or closed
				'Closed',	// Not believed to be a bug
				'Open',		// Bug has been confirmed, possible extra information included to reproduce
				'Resolved',	// Bug has been resolved
			)
		)
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'project_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				'required' => true,
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'ParentBug' => array(
			'className' => 'Bug',
			'foreignKey' => 'parent_bug_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
