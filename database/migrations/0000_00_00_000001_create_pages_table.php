<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('apiarist_pages', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('page_project')->default(1);
            $table->string('page_title');
            $table->string('page_desc')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        $pages = [
            [
                'page_project' => '1',
                'page_title' => 'Home',
                'page_desc' => '',
            ],
            [
                'page_project' => '1',
                'page_title' => 'About Us',
                'page_desc' => '',
            ],
            [
                'page_project' => '1',
                'page_title' => 'Contact Us',
                'page_desc' => '',
            ]
        ];

        foreach($pages as $page) {
            DB::table('apiarist_pages')->insert($page);
        }
    }

    public function down()
    {
        Schema::drop('apiarist_pages');
    }
}
