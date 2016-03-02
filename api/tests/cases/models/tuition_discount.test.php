<?php
/* TuitionDiscount Test cases generated on: 2016-03-02 08:21:23 : 1456903283*/
App::import('Model', 'TuitionDiscount');

class TuitionDiscountTestCase extends CakeTestCase {
	var $fixtures = array('app.tuition_discount', 'app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.discount');

	function startTest() {
		$this->TuitionDiscount =& ClassRegistry::init('TuitionDiscount');
	}

	function endTest() {
		unset($this->TuitionDiscount);
		ClassRegistry::flush();
	}

}
