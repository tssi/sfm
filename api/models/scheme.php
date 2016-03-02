<?php
class Scheme extends AppModel {
	var $name = 'Scheme';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Payment' => array(
			'className' => 'Payment',
			'joinTable' => 'payment_schemes',
			'foreignKey' => 'scheme_id',
			'associationForeignKey' => 'payment_id',
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
