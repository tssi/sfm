<?php
/* Discount Test cases generated on: 2016-03-02 08:21:11 : 1456903271*/
App::import('Model', 'Discount');

class DiscountTestCase extends CakeTestCase {
	var $fixtures = array('app.discount', 'app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount');

	function startTest() {
		$this->Discount =& ClassRegistry::init('Discount');
	}

	function endTest() {
		unset($this->Discount);
		ClassRegistry::flush();
	}

}
