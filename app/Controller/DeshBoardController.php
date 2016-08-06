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
class DeshBoardController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('GiveHelp','GetHelp','User','UserBank');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	function giveHelp() {
		$this->autoRender = false;
	    $this->layout = "";
	     if($this->data){
	    	$userData = $this->Session->read('User');
	    	$helpData['amount'] = $this->data['amount'];
	    	$helpData['email'] = $userData['username'];
	    	$helpData['cr_user_id'] = $userData['UserId'];
	    	$helpData['start_time'] = date("Y-m-d h:i:s");
	    	$helpData['end_time'] = date('Y-m-d h:i:s', strtotime(' +2 day'));
	    	$this->GiveHelp->save($helpData);
	    } else {
	    	return false;
	    }
	}
	function getHelp() {
		$this->autoRender = false;
	    $this->layout = "";
	    if($this->data){
	    	$userData = $this->Session->read('User');
	    	$helpData['amount'] = $this->data['amount'];
	    	$helpData['email'] = $userData['username'];
	    	$helpData['cr_user_id'] = $userData['UserId'];
	    	$helpData['start_time'] = date("Y-m-d h:i:s");
	    	$helpData['end_time'] = date('Y-m-d h:i:s', strtotime(' +2 day'));
	    	$this->GetHelp->save($helpData);
	    } else {
	    	return false;
	    } 
	}
	function saveBankDetails() {
		$this->autoRender = false;
	    $this->layout = "";
	    $userData = $this->Session->read('User');
		$data['user_id'] = $userData['UserId'];
		$bank = $this->UserBank->find('all', array( 'conditions' => array('is_active' => 1,'user_id' =>$userData['UserId'])));
		if (!empty($bank) && !empty($this->data)) {
			foreach ($bank as $key => $value) {
				pr($value['UserBank']['id']);
				 $this->UserBank->updateAll(array('is_active' => 0,array('conditions' => array('id' => $value['UserBank']['id']) )));
			}
			
		}
		if($this->data){
			$data['bank_name'] = $this->data['bankName'];
			$data['account_number'] = $this->data['accountNumber'];
			$data['ifsc_code'] = $this->data['ifsc'];
			$data['branch'] = $this->data['branch'];
			$data['is_active'] = 1;
			$this->UserBank->save($data);
			$this->redirect( array( 'controller' => 'home_pages', 'action' => 'deshBoard?bankDetails=1' ) );
		}
	}
	function adminLogin(){
		$userData = $this->Session->read('User');
		$data = $this->GiveHelp->find('all', array( 'fields' =>array('User.name','GiveHelp.cr_user_id','GiveHelp.amount','GiveHelp.start_time','User.username'),'conditions' => array('GiveHelp.is_active' => 1),
			'joins' => array(
                    array('table'=>'users','alias'=>'User','type'=>'inner','conditions'=>array('GiveHelp.cr_user_id = User.id'))
                )));
		$this->set('giveHelpRecords',$data);
	}
}