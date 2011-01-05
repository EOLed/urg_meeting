<?php
class MeetingsController extends UrgMeetingAppController {

	var $name = 'Meetings';

	function index() {
		$this->Meeting->recursive = 0;
		$this->set('meetings', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid meeting', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('meeting', $this->Meeting->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Meeting->create();
			if ($this->Meeting->save($this->data)) {
				$this->Session->setFlash(__('The meeting has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->Meeting->Group->find('list');
		$recurrences = $this->Meeting->Recurrence->find('list');
		$this->set(compact('groups', 'recurrences'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid meeting', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Meeting->save($this->data)) {
				$this->Session->setFlash(__('The meeting has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Meeting->read(null, $id);
		}
		$groups = $this->Meeting->Group->find('list');
		$recurrences = $this->Meeting->Recurrence->find('list');
		$this->set(compact('groups', 'recurrences'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for meeting', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Meeting->delete($id)) {
			$this->Session->setFlash(__('Meeting deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Meeting was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
