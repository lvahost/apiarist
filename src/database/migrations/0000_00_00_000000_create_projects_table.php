<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('apiarist_projects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('project_name');
            $table->string('project_desc')->nullable();
            $table->string('project_owner');
            $table->softDeletes();
            $table->timestamps();
        });
        
        DB::table('apiarist_projects')->insert([
            'project_name' => 'Unknown Project',
            'project_desc' => 'This is the default project. This exists to let you know it exists.',
            'project_owner' => '1',
        ]);
    }

    public function down()
    {
        Schema::drop('apiarist_projects');
    }
}