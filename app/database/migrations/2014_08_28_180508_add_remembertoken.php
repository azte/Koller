<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRemembertoken extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

/*SE AGREGA EL CAMPO REMEMBER_TOKEN PARA PODER USAR EL COMPONENTE AUTH/LOGOUT
*/

	public function up()
	{
		Schema::table('users', function($table) {

		
         $table->string('remember_token')->nullable();

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
