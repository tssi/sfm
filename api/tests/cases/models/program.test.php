<?php
/* Program Test cases generated on: 2016-03-02 08:21:20 : 1456903280*/
App::import('Model', 'Program');

class ProgramTestCase extends CakeTestCase {
	var $fixtures = array('app.program', 'app.tuition', 'app.year_level', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount');

	function startTest() {
		$this->Program =& ClassRegistry::init('Program');
	}

	function endTest() {
		unset($this->Program);
		ClassRegistry::flush();
	}

}
