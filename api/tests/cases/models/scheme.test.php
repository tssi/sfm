<?php
/* Scheme Test cases generated on: 2016-03-02 08:21:21 : 1456903281*/
App::import('Model', 'Scheme');

class SchemeTestCase extends CakeTestCase {
	var $fixtures = array('app.scheme', 'app.payment', 'app.payment_scheme');

	function startTest() {
		$this->Scheme =& ClassRegistry::init('Scheme');
	}

	function endTest() {
		unset($this->Scheme);
		ClassRegistry::flush();
	}

}
