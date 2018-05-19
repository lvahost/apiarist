<?php

namespace thepirateorange\Apiarist\app\Models;

use Illuminate\Database\Eloquent\Model;

class ApiaristProjects extends Model
{
	# Mass Assignable
	protected $fillable = ['project_name', 'project_desc', 'project_owner'];
	
    # Declare Table
    protected $table = 'apiarist_projects';
}
