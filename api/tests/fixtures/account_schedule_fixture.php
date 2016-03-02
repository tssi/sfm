<?php
/* AccountSchedule Fixture generated on: 2016-03-02 08:21:07 : 1456903267 */
class AccountScheduleFixture extends CakeTestFixture {
	var $name = 'AccountSchedule';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'account_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bill_month' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'due_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'due_amount' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'paid_amount' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'account_id' => 'Lorem ipsum d',
			'bill_month' => 'Lorem ',
			'due_date' => '2016-03-02',
			'due_amount' => 1,
			'paid_amount' => 1,
			'created' => '2016-03-02 08:21:07',
			'modified' => '2016-03-02 08:21:07'
		),
	);
}
