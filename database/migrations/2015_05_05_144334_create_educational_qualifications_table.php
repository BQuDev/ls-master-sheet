<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalQualificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('educational_qualifications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('qualification');
			$table->string('institution');
			$table->string('qualification_start_date');
			$table->string('qualification_end_date');
			$table->string('qualification_grade');
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
		Schema::drop('educational_qualifications');
	}

}