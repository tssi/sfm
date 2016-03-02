<?php
/* AccountAdjustment Test cases generated on: 2016-03-02 08:21:03 : 1456903263*/
App::import('Model', 'AccountAdjustment');

class AccountAdjustmentTestCase extends CakeTestCase {
	var $fixtures = array('app.account_adjustment', 'app.account', 'app.account_fee', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.account_history', 'app.account_schedule', 'app.ledger');

	function startTest() {
		$this->AccountAdjustment =& ClassRegistry::init('AccountAdjustment');
	}

	function endTest() {
		unset($this->AccountAdjustment);
		ClassRegistry::flush();
	}

}
