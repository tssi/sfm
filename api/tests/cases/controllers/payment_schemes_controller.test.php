<?php
/* PaymentSchemes Test cases generated on: 2016-03-02 08:21:36 : 1456903296*/
App::import('Controller', 'PaymentSchemes');

class TestPaymentSchemesController extends PaymentSchemesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PaymentSchemesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.payment_scheme', 'app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.tuition_discount', 'app.discount', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period');

	function startTest() {
		$this->PaymentSchemes =& new TestPaymentSchemesController();
		$this->PaymentSchemes->constructClasses();
	}

	function endTest() {
		unset($this->PaymentSchemes);
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
