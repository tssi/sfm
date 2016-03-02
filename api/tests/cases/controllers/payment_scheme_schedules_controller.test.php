<?php
/* PaymentSchemeSchedules Test cases generated on: 2016-03-02 08:21:36 : 1456903296*/
App::import('Controller', 'PaymentSchemeSchedules');

class TestPaymentSchemeSchedulesController extends PaymentSchemeSchedulesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PaymentSchemeSchedulesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.payment_scheme_schedule', 'app.payment_scheme', 'app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.tuition_discount', 'app.discount', 'app.scheme', 'app.payment', 'app.billing_period');

	function startTest() {
		$this->PaymentSchemeSchedules =& new TestPaymentSchemeSchedulesController();
		$this->PaymentSchemeSchedules->constructClasses();
	}

	function endTest() {
		unset($this->PaymentSchemeSchedules);
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
