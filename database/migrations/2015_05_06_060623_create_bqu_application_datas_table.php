<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBquApplicationDatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bqu_application_datas', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('application_received_date');
            $table->string('application_input_by');
            $table->string('supervisor');
            $table->string('verified_date');
            $table->string('status');
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
		Schema::drop('bqu_application_datas');
	}

}
