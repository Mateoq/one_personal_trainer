<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('name', 128);
			$table->string('second_name', 128)->nullable();
			$table->string('lastname', 128);
			$table->string('second_lastname', 128)->nullable();
			$table->string('email', 128)->unique();
			$table->string('password', 64);
			$table->date('birthday');
			$table->integer("cellphone");
			$table->integer("phone");
			$table->text("goal");
			$table->boolean("courtesy_day")->default(false);
			$table->integer("plan_id")->nullable();
			$table->timestamp("plan_date")->nullable();
			$table->integer('permissions')->default(2);
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
		Schema::dropIfExists('users');
	}

}