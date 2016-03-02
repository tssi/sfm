<?php
/* Scheme Fixture generated on: 2016-03-02 08:21:21 : 1456903281 */
class SchemeFixture extends CakeTestFixture {
	var $name = 'Scheme';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'code' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'payment_frequency' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'order' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 'Lo',
			'code' => 'Lorem ipsum dolor sit ame',
			'name' => 'Lorem ipsum dolor sit amet',
			'payment_frequency' => 1,
			'order' => 1,
			'created' => '2016-03-02 08:21:21',
			'modified' => '2016-03-02 08:21:21'
		),
	);
}
