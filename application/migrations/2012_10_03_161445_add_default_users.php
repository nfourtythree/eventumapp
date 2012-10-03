<?php

class Add_Default_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
				array(
						'username'=>'admin'
					),
				array(
						'username'=>'test'
					)

			));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->where('username', '=', 'admin')->or_where('username','=','test')->delete();
	}

}