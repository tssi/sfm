<?php
/* Discounts Test cases generated on: 2016-03-02 08:21:35 : 1456903295*/
App::import('Controller', 'Discounts');

class TestDiscountsController extends DiscountsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DiscountsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.discount', 'app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount');

	function startTest() {
		$this->Discounts =& new TestDiscountsController();
		$this->Discounts->constructClasses();
	}

	function endTest() {
		unset($this->Discounts);
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
