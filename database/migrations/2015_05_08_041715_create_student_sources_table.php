<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_sources', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('app_date');
			$table->string('ams_date');
			$table->string('source');
			$table->string('agent_lap');
			$table->string('admission_manager');
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
		Schema::drop('student_sources');
	}

}
