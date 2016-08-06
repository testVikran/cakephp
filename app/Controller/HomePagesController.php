<?php
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class HomePagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('UserBank','User','Amount','HotelDetail');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	function index() {
		$this->layout="default";

	}

	function deshBoard() {
		if(!$this->_checkLogin()) {
			$this->redirect( array( 'controller' => 'home_pages', 'action' => 'index' ) );
		}
		$this->layout="default";
		$userData = $this->Session->read('User');
		if($userData['UserId'] ==1 || $userData['UserId'] ==2) {
			$amounts = $this->HotelDetail->find('all', array( 'conditions' => array('id !=' => 0)));
		
		$this->set('hotel',$amounts);
		}
		
		
		
	}

	function registration() {
		$this->autoRender = false;
	    $this->layout = "";
			$data['add'] = $this->data['email'];
			$data['name'] = $this->data['Name'];
			$data['city'] = $this->data['password'];
			
			$data1 = $this->HotelDetail->save($data);
			$data['UserId'] = $data1['User']['id'];
			$this->redirect( array( 'controller' => 'home_pages', 'action' => 'index=status=6' ) );
		
	}

	function logins() {
		$this->autoRender = false;
	    $this->layout = "";
		$User = $this->_import("User");
		$login_detail = $User->find('first', array( 'conditions' => array('email' => $this->data['email'])));
		if(empty($login_detail)) {
			$this->redirect( array( 'controller' => 'home_pages', 'action' => 'index?status=2' ) );
		} else {
			if($login_detail['User']['email'] == $this->data['email'] && $login_detail['User']['password'] == md5($this->data['password'])) {
				$data['UserId'] = $login_detail['User']['id'];
				$data['email'] = $login_detail['User']['email'];
				$data['password'] = $login_detail['User']['password'];
				$this->Session->write('User',$data);
				$this->redirect( array( 'controller' => 'home_pages', 'action' => 'deshBoard' ) );
			} else {
				$this->redirect( array( 'controller' => 'home_pages', 'action' => 'index?status=3' ) );
			}
		}
	}

	function logout(){
		$this->Session->delete('User');
		$this->Session->destroy();
		$this->redirect( array( 'controller' => 'home_pages', 'action' => 'index' ) );
	}
}