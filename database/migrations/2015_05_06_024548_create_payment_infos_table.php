<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_infos', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('payment_amount');
            $table->string('date');
            $table->string('method');
            $table->string('san');
            $table->integer('payment_info_type');
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
		Schema::drop('payment_infos');
	}

}
