<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('title')->index();
            $table->text('body');
            $table->integer('user_id')->index();
            $table->integer('node_id')->index();
            $table->integer('reply_count')->default(0)->index();
            $table->integer('view_count')->default(0)->index();
            $table->softDeletes();
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topics');
	}

}
