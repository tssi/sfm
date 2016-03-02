<?php
/* PaymentScheme Test cases generated on: 2016-03-02 08:21:18 : 1456903278*/
App::import('Model', 'PaymentScheme');

class PaymentSchemeTestCase extends CakeTestCase {
	var $fixtures = array('app.payment_scheme', 'app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.tuition_discount', 'app.discount', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period');

	function startTest() {
		$this->PaymentScheme =& ClassRegistry::init('PaymentScheme');
	}

	function endTest() {
		unset($this->PaymentScheme);
		ClassRegistry::flush();
	}

}
