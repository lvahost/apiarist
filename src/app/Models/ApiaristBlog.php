<?php

namespace thepirateorange\Apiarist\app\Models;

use Illuminate\Database\Eloquent\Model;

class ApiaristBlog extends Model
{
	# Mass Assignable
	protected $fillable = ['title', 'desc'];

	# Declare Table
    protected $table = 'apiarist_blog';
}
