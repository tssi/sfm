<?php
/* PaymentSchemeSchedule Test cases generated on: 2016-03-02 08:21:17 : 1456903277*/
App::import('Model', 'PaymentSchemeSchedule');

class PaymentSchemeScheduleTestCase extends CakeTestCase {
	var $fixtures = array('app.payment_scheme_schedule', 'app.payment_scheme', 'app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.tuition_discount', 'app.discount', 'app.scheme', 'app.payment', 'app.billing_period');

	function startTest() {
		$this->PaymentSchemeSchedule =& ClassRegistry::init('PaymentSchemeSchedule');
	}

	function endTest() {
		unset($this->PaymentSchemeSchedule);
		ClassRegistry::flush();
	}

}
