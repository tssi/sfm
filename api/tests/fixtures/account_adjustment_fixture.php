<?php
/* AccountAdjustment Fixture generated on: 2016-03-02 08:21:02 : 1456903262 */
class AccountAdjustmentFixture extends CakeTestFixture {
	var $name = 'AccountAdjustment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'account_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'item_code' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'flag' => array('type' => 'string', 'null' => true, 'default' => '+', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'amount' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'account_id' => 'Lorem ipsum d',
			'item_code' => 'L',
			'flag' => 'Lorem ipsum dolor sit ame',
			'amount' => 1,
			'created' => '2016-03-02 08:21:02',
			'modified' => '2016-03-02 08:21:02'
		),
	);
}
