<?php
/* AccountAdjustments Test cases generated on: 2016-03-02 08:21:34 : 1456903294*/
App::import('Controller', 'AccountAdjustments');

class TestAccountAdjustmentsController extends AccountAdjustmentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AccountAdjustmentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.account_adjustment', 'app.account', 'app.account_fee', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.account_history', 'app.account_schedule', 'app.ledger');

	function startTest() {
		$this->AccountAdjustments =& new TestAccountAdjustmentsController();
		$this->AccountAdjustments->constructClasses();
	}

	function endTest() {
		unset($this->AccountAdjustments);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
