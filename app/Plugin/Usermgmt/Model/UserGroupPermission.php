<?php

App::uses('UserMgmtAppModel', 'Usermgmt.Model');
App::uses('CakeEmail', 'Network/Email');
class UserGroupPermission extends UserMgmtAppModel {
	 var $belongsTo = array('Usermgmt.UserGroup');
}