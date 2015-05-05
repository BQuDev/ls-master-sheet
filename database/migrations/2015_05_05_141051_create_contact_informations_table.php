<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInformationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_informations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('uk_street');
            $table->string('uk_city');
            $table->string('uk_post_code');
            $table->string('uk_mobile');
            $table->string('uk_landline');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('city');
            $table->string('post_code');
            $table->string('country');
            $table->string('mobile');
            $table->string('landline');
            $table->string('email');
            $table->string('alternative_email');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('other_social');
            $table->string('next_of_kin_title');
            $table->string('next_of_kin_forename');
            $table->string('next_of_kin_surname');
            $table->string('next_of_kin_telephone');
            $table->string('next_of_kin_email');
            $table->string('san');
            $table->integer('student_id');
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
		Schema::drop('contact_informations');
	}

}
