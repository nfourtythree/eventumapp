<?php

class Admin_User_Controller extends Base_Controller {

	public function action_index()
	{
		// code here..

		return View::make('admin::user.index');
	}


	public function action_login()
	{
		return View::make('admin::user.login');
	}

}
