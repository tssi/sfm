<?php
class BillingPeriod extends AppModel {
	var $name = 'BillingPeriod';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'PaymentSchemeSchedule' => array(
			'className' => 'PaymentSchemeSchedule',
			'foreignKey' => 'billing_period_id',
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
