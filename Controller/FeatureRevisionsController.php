<?php
App::uses('AppController', 'Controller');
/**
 * FeatureRevisions Controller
 *
 * @property FeatureRevision $FeatureRevision
 */
class FeatureRevisionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FeatureRevision->recursive = 0;
		$this->set('featureRevisions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FeatureRevision->id = $id;
		if (!$this->FeatureRevision->exists()) {
			throw new NotFoundException(__('Invalid feature revision'));
		}
		$this->set('featureRevision', $this->FeatureRevision->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FeatureRevision->create();
			if ($this->FeatureRevision->save($this->request->data)) {
				$this->Session->setFlash(__('The feature revision has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature revision could not be saved. Please, try again.'));
			}
		}
		$features = $this->FeatureRevision->Feature->find('list');
		$this->set(compact('features'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FeatureRevision->id = $id;
		if (!$this->FeatureRevision->exists()) {
			throw new NotFoundException(__('Invalid feature revision'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FeatureRevision->save($this->request->data)) {
				$this->Session->setFlash(__('The feature revision has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature revision could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FeatureRevision->read(null, $id);
		}
		$features = $this->FeatureRevision->Feature->find('list');
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
		$this->FeatureRevision->id = $id;
		if (!$this->FeatureRevision->exists()) {
			throw new NotFoundException(__('Invalid feature revision'));
		}
		if ($this->FeatureRevision->delete()) {
			$this->Session->setFlash(__('Feature revision deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Feature revision was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
