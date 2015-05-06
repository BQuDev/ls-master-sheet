<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentInfoMetadatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_info_metadatas', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('course_fees');
            $table->string('payment_status');
            $table->string('total_fee');
            $table->string('late_admin_fee');
            $table->string('late_fee');
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
		Schema::drop('payment_info_metadatas');
	}

}
