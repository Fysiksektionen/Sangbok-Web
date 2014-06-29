<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('chapter_id')->references('id')->on('users');
			$table->integer('number');
			$table->string('title', 255);
			$table->string('author', 255)->nullable();
			$table->string('melody', 255)->nullable();
			$table->text('text');
		});

		/*Schema::table('songs', function($table) {
       $table->foreign('chapter_id')->references('id')
				->on('chapters')
				->onDelete('cascade');
   });*/

	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('songs');
	}

}
