<?php
/* AccountFees Test cases generated on: 2016-03-02 08:21:34 : 1456903294*/
App::import('Controller', 'AccountFees');

class TestAccountFeesController extends AccountFeesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AccountFeesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.account_fee', 'app.account', 'app.account_adjustment', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount');

	function startTest() {
		$this->AccountFees =& new TestAccountFeesController();
		$this->AccountFees->constructClasses();
	}

	function endTest() {
		unset($this->AccountFees);
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
