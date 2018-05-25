<?php

namespace thepirateorange\Apiarist\app\Models;

use Illuminate\Database\Eloquent\Model;

class ApiaristBlogTraffic extends Model
{
	# Mass Assignable
	protected $fillable = ['title', 'desc', 'blog_id'];
	
	# Declare Table
    protected $table = 'apiarist_blog_pages';
}
