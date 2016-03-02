<?php
/* YearLevel Test cases generated on: 2016-03-02 08:21:25 : 1456903285*/
App::import('Model', 'YearLevel');

class YearLevelTestCase extends CakeTestCase {
	var $fixtures = array('app.year_level', 'app.tuition', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount');

	function startTest() {
		$this->YearLevel =& ClassRegistry::init('YearLevel');
	}

	function endTest() {
		unset($this->YearLevel);
		ClassRegistry::flush();
	}

}
