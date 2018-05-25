<?php

namespace thepirateorange\Apiarist\app\Models;

use Illuminate\Database\Eloquent\Model;

class ApiaristBlogTraffic extends Model
{
	# Mass Assignable
	protected $fillable = ['blog_id', 'blog_page_id', 'ip_address', 'user_agent'];
	
	# Declare Table
    protected $table = 'apiarist_blog_traffic';
}
