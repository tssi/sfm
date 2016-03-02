<?php
/* FeeBreakdowns Test cases generated on: 2016-03-02 08:21:36 : 1456903296*/
App::import('Controller', 'FeeBreakdowns');

class TestFeeBreakdownsController extends FeeBreakdownsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FeeBreakdownsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.fee_breakdown', 'app.tuition', 'app.year_level', 'app.program', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger');

	function startTest() {
		$this->FeeBreakdowns =& new TestFeeBreakdownsController();
		$this->FeeBreakdowns->constructClasses();
	}

	function endTest() {
		unset($this->FeeBreakdowns);
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
