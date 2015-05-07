<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentIntakesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_intakes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('year');
            $table->integer('month');
            $table->integer('entry_month');
            $table->string('end_date');
            $table->string('transcript_date');
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
		Schema::drop('student_intakes');
	}

}
