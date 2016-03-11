<?php
/* AccountTransactions Test cases generated on: 2016-03-02 08:35:00 : 1456904100*/
App::import('Controller', 'AccountTransactions');

class TestAccountTransactionsController extends AccountTransactionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AccountTransactionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.account_transaction', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.fee', 'app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.educ_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.transaction_type');

	function startTest() {
		$this->AccountTransactions =& new TestAccountTransactionsController();
		$this->AccountTransactions->constructClasses();
	}

	function endTest() {
		unset($this->AccountTransactions);
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
