<?php
App::uses('AppController', 'Controller');
/**
 * Bugs Controller
 *
 * @property Bug $Bug
 */
class BugsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bug->recursive = 0;
		$this->set('bugs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Bug->id = $id;
		if (!$this->Bug->exists()) {
			throw new NotFoundException(__('Invalid bug'));
		}
		$bug = $this->Bug->read(null, $id);
		$states = $this->Bug->getValues('state');
		$this->set(compact('bug', 'states'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($project_id = null) {
		$this->Bug->Project->id = $project_id;
		if (!$this->Bug->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->request->data['Bug']['project_id'] = $project_id;
		if ($this->request->is('post')) {
			$this->Bug->create();
			if ($this->Bug->save($this->request->data)) {
				$this->Session->setFlash(__('The bug has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bug could not be saved. Please, try again.'));
			}
		}
		$parentBugs = $this->Bug->ParentBug->find('list');
		$projects = $this->Bug->Project->find('list');
		$this->set(compact('parentBugs', 'projects'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Bug->id = $id;
		if (!$this->Bug->exists()) {
			throw new NotFoundException(__('Invalid bug'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bug->save($this->request->data)) {
				$this->Session->setFlash(__('The bug has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bug could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Bug->read(null, $id);
		}
		$parentBugs = $this->Bug->ParentBug->find('list');
		$projects = $this->Bug->Project->find('list');
		$this->set(compact('parentBugs', 'projects'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bug->id = $id;
		if (!$this->Bug->exists()) {
			throw new NotFoundException(__('Invalid bug'));
		}
		if ($this->Bug->delete()) {
			$this->Session->setFlash(__('Bug deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bug was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
