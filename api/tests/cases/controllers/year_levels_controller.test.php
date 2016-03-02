<?php
/* YearLevels Test cases generated on: 2016-03-02 08:21:37 : 1456903297*/
App::import('Controller', 'YearLevels');

class TestYearLevelsController extends YearLevelsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class YearLevelsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.year_level', 'app.tuition', 'app.program', 'app.fee_breakdown', 'app.fee', 'app.account', 'app.account_adjustment', 'app.account_fee', 'app.account_history', 'app.account_schedule', 'app.ledger', 'app.payment_scheme', 'app.scheme', 'app.payment', 'app.payment_scheme_schedule', 'app.billing_period', 'app.tuition_discount', 'app.discount');

	function startTest() {
		$this->YearLevels =& new TestYearLevelsController();
		$this->YearLevels->constructClasses();
	}

	function endTest() {
		unset($this->YearLevels);
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
