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
                'page_desc' => 'Homepage.',
            ],
            [
                'page_project' => '1',
                'page_title' => 'About Us',
                'page_desc' => 'The page that tells you things.',
            ],
            [
                'page_project' => '1',
                'page_title' => 'Contact Us',
                'page_desc' => 'To reach us.',
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
