<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentWorkExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_work_experiences', function(Blueprint $table)
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
            $table->integer('record_status');
            $table->integer('created_by');
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
		Schema::drop('student_work_experiences');
	}

}
