<?php
class Discount extends AppModel {
	var $name = 'Discount';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Tuition' => array(
			'className' => 'Tuition',
			'joinTable' => 'tuition_discounts',
			'foreignKey' => 'discount_id',
			'associationForeignKey' => 'tuition_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
