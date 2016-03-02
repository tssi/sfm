<?php
/* BillingPeriods Test cases generated on: 2016-03-02 08:21:35 : 1456903295*/
App::import('Controller', 'BillingPeriods');

class TestBillingPeriodsController extends BillingPeriodsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BillingPeriodsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.billing_period', 'app.payment_scheme_schedule', 'app.payment_scheme', 'app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.tuition_discount', 'app.discount', 'app.scheme', 'app.payment');

	function startTest() {
		$this->BillingPeriods =& new TestBillingPeriodsController();
		$this->BillingPeriods->constructClasses();
	}

	function endTest() {
		unset($this->BillingPeriods);
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
