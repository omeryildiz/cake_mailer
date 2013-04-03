<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * MailLists Controller
 *
 * @property MailList $MailList
 */
class MailListsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MailList->recursive = 0;
		$this->set('mailLists', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MailList->id = $id;
		if (!$this->MailList->exists()) {
			throw new NotFoundException(__('Invalid mail list'));
		}
		$this->set('mailList', $this->MailList->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MailList->create();
			if ($this->MailList->save($this->request->data)) {
				$this->Session->setFlash(__('The mail list has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail list could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MailList->id = $id;
		if (!$this->MailList->exists()) {
			throw new NotFoundException(__('Invalid mail list'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MailList->save($this->request->data)) {
				$this->Session->setFlash(__('The mail list has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail list could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MailList->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->MailList->id = $id;
		if (!$this->MailList->exists()) {
			throw new NotFoundException(__('Invalid mail list'));
		}
		if ($this->MailList->delete()) {
			$this->Session->setFlash(__('Mail list deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mail list was not deleted'));
		$this->redirect(array('action' => 'index'));
	}



	public function send() {
	
    	$email = new CakeEmail();
	$email->from(array('nomeryildiz@gmail.com' => 'Ömer Yıldız'));
	$email->to('omeryildiz@mail.com');
	$email->cc('omeryildiz@mail.com');
	$email->subject('Konu yok ve bulunmamaktadır');
	$email->send('Burada bir test durumu söz konusudur. Bu testi yapabilmek için cake email kullanmalıyız.');

	}
}
