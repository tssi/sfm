<?php
/* Fee Test cases generated on: 2016-03-02 08:21:14 : 1456903274*/
App::import('Model', 'Fee');

class FeeTestCase extends CakeTestCase {
	var $fixtures = array('app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger');

	function startTest() {
		$this->Fee =& ClassRegistry::init('Fee');
	}

	function endTest() {
		unset($this->Fee);
		ClassRegistry::flush();
	}

}
