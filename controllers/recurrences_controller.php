<?php
class RecurrencesController extends UrgMeetingAppController {

	var $name = 'Recurrences';
	var $helpers = array("Urg.SecuredAction");

    function index() {
		$this->Recurrence->recursive = 0;
		$this->set('recurrences', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid recurrence', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('recurrence', $this->Recurrence->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Recurrence->create();
			if ($this->Recurrence->save($this->data)) {
				$this->Session->setFlash(__('The recurrence has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurrence could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid recurrence', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Recurrence->save($this->data)) {
				$this->Session->setFlash(__('The recurrence has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurrence could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Recurrence->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for recurrence', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Recurrence->delete($id)) {
			$this->Session->setFlash(__('Recurrence deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Recurrence was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
