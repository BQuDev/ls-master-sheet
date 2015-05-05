<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentLapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agent_laps', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('ref');
            $table->string('active_date');
            $table->string('region');
            $table->string('country');
            $table->string('town');
            $table->string('post_code');
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
		Schema::drop('agent_laps');
	}

}
