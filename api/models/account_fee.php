<?php
class AccountFee extends AppModel {
	var $name = 'AccountFee';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fee' => array(
			'className' => 'Fee',
			'foreignKey' => 'fee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
