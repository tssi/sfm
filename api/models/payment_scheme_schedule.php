<?php
class PaymentSchemeSchedule extends AppModel {
	var $name = 'PaymentSchemeSchedule';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'PaymentScheme' => array(
			'className' => 'PaymentScheme',
			'foreignKey' => 'payment_scheme_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BillingPeriod' => array(
			'className' => 'BillingPeriod',
			'foreignKey' => 'billing_period_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
