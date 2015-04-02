<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('title')->index();
            $table->text('body');
            $table->integer('author_id')->index();
            $table->string('url');
            $table->integer('cate_id')->index();
            $table->integer('comment_count')->default(0)->index();
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
		Schema::drop('items');
	}

}
