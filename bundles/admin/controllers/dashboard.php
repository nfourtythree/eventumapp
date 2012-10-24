<?php

class Admin_Dashboard_Controller extends Base_Controller {

	public function action_index()
	{
		// code here..

		return View::make('admin::dashboard.index');
	}

}
