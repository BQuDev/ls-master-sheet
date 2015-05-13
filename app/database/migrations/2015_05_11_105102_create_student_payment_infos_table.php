<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentPaymentInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_payment_infos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('payment_amount');
            $table->string('date');
            $table->string('method');
            $table->integer('payment_info_type');
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
		Schema::drop('student_payment_infos');
	}

}
