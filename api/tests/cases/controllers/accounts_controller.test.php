<?php
/* Accounts Test cases generated on: 2016-03-02 08:21:35 : 1456903295*/
App::import('Controller', 'Accounts');

class TestAccountsController extends AccountsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AccountsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.account', 'app.account_adjustment', 'app.account_fee', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.account_history', 'app.account_schedule', 'app.ledger');

	function startTest() {
		$this->Accounts =& new TestAccountsController();
		$this->Accounts->constructClasses();
	}

	function endTest() {
		unset($this->Accounts);
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
