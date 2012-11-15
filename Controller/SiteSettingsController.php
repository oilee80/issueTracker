<?php
App::uses('AppController', 'Controller');
/**
 * SiteSettings Controller
 *
 * @property SiteSetting $SiteSetting
 */
class SiteSettingsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SiteSetting->recursive = 0;
		$this->set('siteSettings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SiteSetting->id = $id;
		if (!$this->SiteSetting->exists()) {
			throw new NotFoundException(__('Invalid site setting'));
		}
		$this->set('siteSetting', $this->SiteSetting->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SiteSetting->create();
			if ($this->SiteSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The site setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site setting could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SiteSetting->id = $id;
		if (!$this->SiteSetting->exists()) {
			throw new NotFoundException(__('Invalid site setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SiteSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The site setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site setting could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SiteSetting->read(null, $id);
		}
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
		$this->SiteSetting->id = $id;
		if (!$this->SiteSetting->exists()) {
			throw new NotFoundException(__('Invalid site setting'));
		}
		if ($this->SiteSetting->delete()) {
			$this->Session->setFlash(__('Site setting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Site setting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
