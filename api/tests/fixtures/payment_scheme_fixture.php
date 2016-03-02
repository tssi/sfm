<?php
/* PaymentScheme Fixture generated on: 2016-03-02 08:21:17 : 1456903277 */
class PaymentSchemeFixture extends CakeTestFixture {
	var $name = 'PaymentScheme';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 7, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tuition_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 7, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'scheme_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'total_amount' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'variance_amount' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 'Lorem',
			'tuition_id' => 'Lorem',
			'scheme_id' => 'Lo',
			'order' => 1,
			'total_amount' => 1,
			'variance_amount' => 1
		),
	);
}
