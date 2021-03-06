<?php
/* Tuition Test cases generated on: 2016-03-02 08:21:24 : 1456903284*/
App::import('Model', 'Tuition');

class TuitionTestCase extends CakeTestCase {
	var $fixtures = array('app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount');

	function startTest() {
		$this->Tuition =& ClassRegistry::init('Tuition');
	}

	function endTest() {
		unset($this->Tuition);
		ClassRegistry::flush();
	}

}
