<?php
/* TransactionType Test cases generated on: 2016-03-02 08:21:22 : 1456903282*/
App::import('Model', 'TransactionType');

class TransactionTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.transaction_type');

	function startTest() {
		$this->TransactionType =& ClassRegistry::init('TransactionType');
	}

	function endTest() {
		unset($this->TransactionType);
		ClassRegistry::flush();
	}

}
