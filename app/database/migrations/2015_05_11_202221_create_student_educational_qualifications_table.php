<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentEducationalQualificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_educational_qualifications', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('qualification');
            $table->string('qualification_other');
            $table->string('institution');
            $table->string('qualification_start_date');
            $table->string('qualification_end_date');
            $table->string('qualification_grade');
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
		Schema::drop('student_educational_qualifications');
	}

}
