<?php
/* Payment Test cases generated on: 2016-03-02 08:21:19 : 1456903279*/
App::import('Model', 'Payment');

class PaymentTestCase extends CakeTestCase {
	var $fixtures = array('app.payment');

	function startTest() {
		$this->Payment =& ClassRegistry::init('Payment');
	}

	function endTest() {
		unset($this->Payment);
		ClassRegistry::flush();
	}

}
