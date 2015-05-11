<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->string('initials_1');
            $table->string('initials_2');
            $table->string('initials_3');
            $table->string('forename_1');
            $table->string('forename_2');
            $table->string('forename_3');
            $table->string('surname');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('passport');
            $table->string('san');
            $table->string('ls_student_number');
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
		Schema::drop('students');
	}

}
