<?php
/* AccountSchedule Test cases generated on: 2016-03-02 08:21:07 : 1456903267*/
App::import('Model', 'AccountSchedule');

class AccountScheduleTestCase extends CakeTestCase {
	var $fixtures = array('app.account_schedule', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.account_history', 'app.ledger');

	function startTest() {
		$this->AccountSchedule =& ClassRegistry::init('AccountSchedule');
	}

	function endTest() {
		unset($this->AccountSchedule);
		ClassRegistry::flush();
	}

}
