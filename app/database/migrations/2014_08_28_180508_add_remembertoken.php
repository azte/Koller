<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRemembertoken extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table) {

		 /*$table->increments('id');
         $table->string('name');
         $table->string('password');
         $table->smallInteger('type');*/
         $table->string('remember_token')->nullable();

/*         $table->timestamps();	
*/
		});

     }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
