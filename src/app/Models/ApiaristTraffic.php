<?php

namespace thepirateorange\Apiarist\app\Models;

use Illuminate\Database\Eloquent\Model;

class ApiaristTraffic extends Model
{
	# Mass Assignable
	protected $fillable = ['traffic_page', 'ip_address', 'user_agent'];

	# Declare Table
    protected $table = 'apiarist_traffic';
}
