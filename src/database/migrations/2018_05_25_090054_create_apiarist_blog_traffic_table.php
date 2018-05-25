<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiaristBlogTrafficTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apiarist_blog_traffic', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id');
            $table->integer('blog_page_id');
			$table->string('ip_address');
			$table->string('user_agent');
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
        Schema::drop('apiarist_blog_traffic');
    }
}
