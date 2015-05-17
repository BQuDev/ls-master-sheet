<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentBquDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_bqu_data', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('application_received_date');
            $table->string('application_input_by');
            $table->string('supervisor');
            $table->string('verified_date');
            $table->string('verified_by');
            $table->string('notes');
            $table->string('status');
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
		Schema::drop('student_bqu_data');
	}

}
