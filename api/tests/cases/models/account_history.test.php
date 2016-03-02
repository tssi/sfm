<?php
/* AccountHistory Test cases generated on: 2016-03-02 08:21:06 : 1456903266*/
App::import('Model', 'AccountHistory');

class AccountHistoryTestCase extends CakeTestCase {
	var $fixtures = array('app.account_history', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.account_schedule', 'app.ledger');

	function startTest() {
		$this->AccountHistory =& ClassRegistry::init('AccountHistory');
	}

	function endTest() {
		unset($this->AccountHistory);
		ClassRegistry::flush();
	}

}
