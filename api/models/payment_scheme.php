<?php
class PaymentScheme extends AppModel {
	var $name = 'PaymentScheme';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tuition' => array(
			'className' => 'Tuition',
			'foreignKey' => 'tuition_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Scheme' => array(
			'className' => 'Scheme',
			'foreignKey' => 'scheme_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'PaymentSchemeSchedule' => array(
			'className' => 'PaymentSchemeSchedule',
			'foreignKey' => 'payment_scheme_id',
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
