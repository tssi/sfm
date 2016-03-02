<?php
class YearLevel extends AppModel {
	var $name = 'YearLevel';
	var $useDbConfig = 'sas';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $order = 'YearLevel.order';
	var $belongsTo = array(
		'EducLevel' => array(
			'className' => 'EducLevel',
			'foreignKey' => 'educ_level_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
