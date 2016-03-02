<?php
/* BillingPeriod Fixture generated on: 2016-03-02 08:21:09 : 1456903269 */
class BillingPeriodFixture extends CakeTestFixture {
	var $name = 'BillingPeriod';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'payment_frequency' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'bill_month_start' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'bill_cutoff_date' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'bill_cycle_increment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 'Lo',
			'name' => 'Lorem ipsum dolor sit amet',
			'payment_frequency' => 1,
			'bill_month_start' => 1,
			'bill_cutoff_date' => 1,
			'bill_cycle_increment' => 'Lorem ipsum dolor ',
			'order' => 1,
			'created' => '2016-03-02 08:21:09',
			'modified' => '2016-03-02 08:21:09'
		),
	);
}
