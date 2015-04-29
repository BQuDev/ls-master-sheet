<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdmissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admissions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string("title");
            $table->string("first_name");
            $table->string("name_2");
            $table->string("surname");
            $table->string("uk_street");
            $table->string("uk_city");
            $table->string("uk_postel_code");
            $table->string("nationality");
            $table->string("origin_street");
            $table->string("origin_city");
            $table->string("origin_postal_code");
            $table->string("origin_country");
            $table->string("date_of_birth");
            $table->string("mobile");
            $table->string("land_line");
            $table->string("email");
            $table->string("facebook");
            $table->string("twitter");
            $table->string("linkedin");
            $table->string("other");
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
		Schema::drop('admissions');
	}

}
