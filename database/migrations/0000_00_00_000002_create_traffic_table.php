<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrafficTable extends Migration
{
    public function up()
    {
        Schema::create('apiarist_traffic', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('traffic_page');
			$table->string('ip_address');
			$table->string('user_agent');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('apiarist_traffic');
    }
}
