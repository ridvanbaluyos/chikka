<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsTrackerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('sms_tracker', function($t) {
            $t->increments('id');
            $t->string('message_type', 64);
            $t->string('mobile_number', 16);
            $t->string('shortcode', 16);
            $t->string('request_id', 128);
            $t->string('message', 256);
            $t->string('status', 8);
            $t->string('timestamp', 32);
            $t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('sms_tracker');
	}

}
