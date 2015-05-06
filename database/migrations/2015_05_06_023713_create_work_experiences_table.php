<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_experiences', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('occupation');
            $table->string('institution');
            $table->string('company_name');
            $table->string('main_duties');
            $table->string('occupation_start_date');
            $table->string('occupation_end_date');
            $table->string('currently_working');
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
		Schema::drop('work_experiences');
	}

}
