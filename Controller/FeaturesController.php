<?php
App::uses('AppController', 'Controller');
/**
 * Features Controller
 *
 * @property Feature $Feature
 */
class FeaturesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Feature->recursive = 0;
		$this->set('features', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Feature->id = $id;
		if (!$this->Feature->exists()) {
			throw new NotFoundException(__('Invalid feature'));
		}
		$this->set('feature', $this->Feature->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($project_id = null) {
		$this->Feature->Project->id = $project_id;
		if (!$this->Feature->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is('post')) {
			$this->request->data['Feature']['project_id'] = $project_id;
			$this->Feature->create();
			if ($this->Feature->save($this->request->data)) {
				$this->Session->setFlash(__('The feature has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Feature->Project->find('list');
		$this->set(compact('projects'));

		$this->render('form');
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Feature->id = $id;
		if (!$this->Feature->exists()) {
			throw new NotFoundException(__('Invalid feature'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Feature->save($this->request->data)) {
				$this->Session->setFlash(__('The feature has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Feature->read(null, $id);
		}
		$projects = $this->Feature->Project->find('list');
		$this->set(compact('projects'));

		$this->render('form');
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
		$this->Feature->id = $id;
		if (!$this->Feature->exists()) {
			throw new NotFoundException(__('Invalid feature'));
		}
		if ($this->Feature->delete()) {
			$this->Session->setFlash(__('Feature deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Feature was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
