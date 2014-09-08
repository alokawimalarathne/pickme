<?php

App::uses('UserMgmtAppController', 'Usermgmt.Controller');
class UserGroupsController extends UserMgmtAppController {
	public $uses = array('Usermgmt.UserGroup', 'Usermgmt.User');
	/**
	 * Used to view all groups by Admin
	 *
	 * @access public
	 * @return array
	 */
	public function index() {
		$this->UserGroup->unbindModel( array('hasMany' => array('UserGroupPermission')));
		$userGroups=$this->UserGroup->find('all', array('order'=>'UserGroup.id'));
		$this->set('userGroups', $userGroups);
	}
	/**
	 * Used to add group on the site by Admin
	 *
	 * @access public
	 * @return void
	 */
	public function addGroup() {
		if ($this->request -> isPost()) {
			$this->UserGroup->set($this->data);
			if ($this->UserGroup->addValidate()) {
				$this->UserGroup->save($this->request->data,false);
				$this->Session->setFlash(__('The group is successfully added'));
				$this->redirect('/addGroup');
			}
		}
	}
	/**
	 * Used to edit group on the site by Admin
	 *
	 * @access public
	 * @param integer $groupId group id
	 * @return void
	 */
	public function editGroup($groupId=null) {
		if (!empty($groupId)) {
			if ($this->request -> isPut()) {
				$this->UserGroup->set($this->data);
				if ($this->UserGroup->addValidate()) {
					$this->UserGroup->save($this->request->data,false);
					$this->Session->setFlash(__('The group is successfully updated'));
					$this->redirect('/allGroups');
				}
			} else {
				$this->request->data = $this->UserGroup->read(null, $groupId);
			}
		} else {
			$this->redirect('/allGroups');
		}
	}
	/**
	 * Used to delete group on the site by Admin
	 *
	 * @access public
	 * @param integer $userId group id
	 * @return void
	 */
	public function deleteGroup($groupId = null) {
		if (!empty($groupId)) {
			if ($this->request -> isPost()) {
				$users=$this->User->isUserAssociatedWithGroup($groupId);
				if($users) {
					$this->Session->setFlash(__('Sorry some users are associated with this group, You cannot delete'));
					$this->redirect('/allGroups');
				}
				if ($this->UserGroup->delete($groupId, false)) {
					$this->Session->setFlash(__('Group is successfully deleted'));
				}
			}
			$this->redirect('/allGroups');
		} else {
			$this->redirect('/allGroups');
		}
	}
}