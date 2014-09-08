<?php

class UserMgmtAppController extends AppController {
	public $components = array('Session');

	public function beforeFilter() {
		parent::beforeFilter();
	}
}