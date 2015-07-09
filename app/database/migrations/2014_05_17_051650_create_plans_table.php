<?php

use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("plans", function($table)
		{
			$table->increments("id");
			$table->string("plan", 128);
			$table->string("image", 128);
			$table->string("price",128);
			$table->integer("type")->default(Constants::ONE_PLANS_TYPE_PERSONAL);
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
		Schema::dropIfExists("plans");
	}

}