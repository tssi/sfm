<?php
class TuitionsController extends AppController {

	var $name = 'Tuitions';

	function index() {
		$this->Tuition->recursive = 0;
		$this->set('tuitions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tuition', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tuition', $this->Tuition->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tuition->create();
			if ($this->Tuition->save($this->data)) {
				$this->Session->setFlash(__('The tuition has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tuition could not be saved. Please, try again.', true));
			}
		}
		$yearLevels = $this->Tuition->YearLevel->find('list');
		$programs = $this->Tuition->Program->find('list');
		$this->set(compact('yearLevels', 'programs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tuition', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tuition->save($this->data)) {
				$this->Session->setFlash(__('The tuition has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tuition could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tuition->read(null, $id);
		}
		$yearLevels = $this->Tuition->YearLevel->find('list');
		$programs = $this->Tuition->Program->find('list');
		$this->set(compact('yearLevels', 'programs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tuition', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tuition->delete($id)) {
			$this->Session->setFlash(__('Tuition deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tuition was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
