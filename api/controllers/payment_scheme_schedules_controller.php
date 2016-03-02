<?php
class PaymentSchemeSchedulesController extends AppController {

	var $name = 'PaymentSchemeSchedules';

	function index() {
		$this->PaymentSchemeSchedule->recursive = 0;
		$this->set('paymentSchemeSchedules', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid payment scheme schedule', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('paymentSchemeSchedule', $this->PaymentSchemeSchedule->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PaymentSchemeSchedule->create();
			if ($this->PaymentSchemeSchedule->save($this->data)) {
				$this->Session->setFlash(__('The payment scheme schedule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment scheme schedule could not be saved. Please, try again.', true));
			}
		}
		$paymentSchemes = $this->PaymentSchemeSchedule->PaymentScheme->find('list');
		$billingPeriods = $this->PaymentSchemeSchedule->BillingPeriod->find('list');
		$this->set(compact('paymentSchemes', 'billingPeriods'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid payment scheme schedule', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PaymentSchemeSchedule->save($this->data)) {
				$this->Session->setFlash(__('The payment scheme schedule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment scheme schedule could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PaymentSchemeSchedule->read(null, $id);
		}
		$paymentSchemes = $this->PaymentSchemeSchedule->PaymentScheme->find('list');
		$billingPeriods = $this->PaymentSchemeSchedule->BillingPeriod->find('list');
		$this->set(compact('paymentSchemes', 'billingPeriods'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for payment scheme schedule', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PaymentSchemeSchedule->delete($id)) {
			$this->Session->setFlash(__('Payment scheme schedule deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Payment scheme schedule was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
