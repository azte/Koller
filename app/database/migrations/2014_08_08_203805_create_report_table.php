<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reports', function($table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('userName');
            $table->integer('store');
            $table->longText('comment');
            $table->integer('ticket');
            $table->string('type');
            $table->string('subtype');

            $table->foreign('user_id')->references('id')->on('users');

			$table->timestamps();
        });	}

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
