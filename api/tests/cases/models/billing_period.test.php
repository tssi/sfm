<?php
/* BillingPeriod Test cases generated on: 2016-03-02 08:21:10 : 1456903270*/
App::import('Model', 'BillingPeriod');

class BillingPeriodTestCase extends CakeTestCase {
	var $fixtures = array('app.billing_period', 'app.payment_scheme_schedule', 'app.payment_scheme', 'app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.tuition_discount', 'app.discount', 'app.scheme', 'app.payment');

	function startTest() {
		$this->BillingPeriod =& ClassRegistry::init('BillingPeriod');
	}

	function endTest() {
		unset($this->BillingPeriod);
		ClassRegistry::flush();
	}

}
