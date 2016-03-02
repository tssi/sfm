<?php
/* FeeBreakdown Test cases generated on: 2016-03-02 08:21:13 : 1456903273*/
App::import('Model', 'FeeBreakdown');

class FeeBreakdownTestCase extends CakeTestCase {
	var $fixtures = array('app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger');

	function startTest() {
		$this->FeeBreakdown =& ClassRegistry::init('FeeBreakdown');
	}

	function endTest() {
		unset($this->FeeBreakdown);
		ClassRegistry::flush();
	}

}
