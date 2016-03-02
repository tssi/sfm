<?php
/* Tuitions Test cases generated on: 2016-03-02 08:21:37 : 1456903297*/
App::import('Controller', 'Tuitions');

class TestTuitionsController extends TuitionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TuitionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tuition', 'app.year_level', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount');

	function startTest() {
		$this->Tuitions =& new TestTuitionsController();
		$this->Tuitions->constructClasses();
	}

	function endTest() {
		unset($this->Tuitions);
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
