<?php
/* Ledgers Test cases generated on: 2016-03-02 08:21:36 : 1456903296*/
App::import('Controller', 'Ledgers');

class TestLedgersController extends LedgersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LedgersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ledger', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.account_history', 'app.account_schedule');

	function startTest() {
		$this->Ledgers =& new TestLedgersController();
		$this->Ledgers->constructClasses();
	}

	function endTest() {
		unset($this->Ledgers);
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
