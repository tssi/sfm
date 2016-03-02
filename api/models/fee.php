<?php
class Fee extends AppModel {
	var $name = 'Fee';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'FeeBreakdown' => array(
			'className' => 'FeeBreakdown',
			'foreignKey' => 'fee_id',
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


	var $hasAndBelongsToMany = array(
		'Account' => array(
			'className' => 'Account',
			'joinTable' => 'account_fees',
			'foreignKey' => 'fee_id',
			'associationForeignKey' => 'account_id',
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
