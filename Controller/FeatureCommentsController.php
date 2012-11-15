<?php
App::uses('AppController', 'Controller');
/**
 * FeatureComments Controller
 *
 * @property FeatureComment $FeatureComment
 */
class FeatureCommentsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FeatureComment->recursive = 0;
		$this->set('featureComments', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FeatureComment->id = $id;
		if (!$this->FeatureComment->exists()) {
			throw new NotFoundException(__('Invalid feature comment'));
		}
		$this->set('featureComment', $this->FeatureComment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FeatureComment->create();
			if ($this->FeatureComment->save($this->request->data)) {
				$this->Session->setFlash(__('The feature comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature comment could not be saved. Please, try again.'));
			}
		}
		$features = $this->FeatureComment->Feature->find('list');
		$this->set(compact('features'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FeatureComment->id = $id;
		if (!$this->FeatureComment->exists()) {
			throw new NotFoundException(__('Invalid feature comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FeatureComment->save($this->request->data)) {
				$this->Session->setFlash(__('The feature comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature comment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FeatureComment->read(null, $id);
		}
		$features = $this->FeatureComment->Feature->find('list');
		$this->set(compact('features'));
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
		$this->FeatureComment->id = $id;
		if (!$this->FeatureComment->exists()) {
			throw new NotFoundException(__('Invalid feature comment'));
		}
		if ($this->FeatureComment->delete()) {
			$this->Session->setFlash(__('Feature comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Feature comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
