<?php
/* TransactionTypes Test cases generated on: 2016-03-02 08:21:37 : 1456903297*/
App::import('Controller', 'TransactionTypes');

class TestTransactionTypesController extends TransactionTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TransactionTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.transaction_type');

	function startTest() {
		$this->TransactionTypes =& new TestTransactionTypesController();
		$this->TransactionTypes->constructClasses();
	}

	function endTest() {
		unset($this->TransactionTypes);
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
