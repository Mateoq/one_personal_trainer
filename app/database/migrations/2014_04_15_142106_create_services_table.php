<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function($table)
		{
			$table->increments('id');
			$table->string("key", 128)->unique();
			$table->string('title', 128);
			$table->text('content_line1', 600);
			$table->text('content_line2', 600)->nullable();
			$table->string('image');
			$table->boolean("extras")->default(false);
			$table->boolean("enabled")->default(true);
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
		Schema::dropIfExists('services');
	}

}
