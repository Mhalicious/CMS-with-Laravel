<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()//up für wenn man eine Migration startet
	{
		Schema::create('posts', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('title',200);
			$table->string('slug',400);//looks-like-this, besser für URL
			$table->boolean('draft'); //Vorschau
			$table->text('content');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()//down für "rollback" Migration - invers von den "up"-Sachen
	{

		Schema::drop('posts');

	}

}
