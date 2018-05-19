<?php

namespace thepirateorange\Apiarist\app\Models;

use Illuminate\Database\Eloquent\Model;

class ApiaristPages extends Model
{
	# Mass Assignable
	protected $fillable = ['page_project', 'page_title', 'page_desc'];
	
    # Declare Table
    protected $table = 'apiarist_pages';
}
