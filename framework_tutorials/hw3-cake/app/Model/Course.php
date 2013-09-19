<?php
App::uses('AppModel', 'Model');
/**
 * Course Model
 *
 * @property Instructor $Instructor
 */
class Course extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Instructor' => array(
			'className' => 'Instructor',
			'foreignKey' => 'instructor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
