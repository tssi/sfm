<?php
/* Ledger Test cases generated on: 2016-03-02 08:21:15 : 1456903275*/
App::import('Model', 'Ledger');

class LedgerTestCase extends CakeTestCase {
	var $fixtures = array('app.ledger', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.account_history', 'app.account_schedule');

	function startTest() {
		$this->Ledger =& ClassRegistry::init('Ledger');
	}

	function endTest() {
		unset($this->Ledger);
		ClassRegistry::flush();
	}

}
