<?php
/* AccountFee Test cases generated on: 2016-03-02 08:21:04 : 1456903264*/
App::import('Model', 'AccountFee');

class AccountFeeTestCase extends CakeTestCase {
	var $fixtures = array('app.account_fee', 'app.account', 'app.account_adjustment', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount');

	function startTest() {
		$this->AccountFee =& ClassRegistry::init('AccountFee');
	}

	function endTest() {
		unset($this->AccountFee);
		ClassRegistry::flush();
	}

}
