<?php
namespace thepirateorange\Apiarist\app\Http\Controllers\Api;

use Illuminate\Routing\Controller as Controller;
use thepirateorange\Apiarist\app\Models\ApiaristProjects;
use thepirateorange\Apiarist\Apiarist;
use Illuminate\Http\Request;

class ApiaristProjectsController extends Controller
{
	# Construct
    public function __construct() {
    }

	# List
	public function list(Request $request, $num_results = 10) {

		# Get Projects
		$projects = Apiarist::listProjects($num_results, $request->pages);

		# Return All Projects
		return response()->json($projects);

	}

	# Get
	public function get(Request $request, $project_id) {

		# Return Project
		return response()->json(Apiarist::getProject($project_id, $request->pages));

	}

	# Store
	public function store(Request $request) {

		# Create Project
        $project = ApiaristProjects::create([
            'project_name' => 'Unknown Project',
            'project_desc' => 'This is the default project. This exists to let you know it exists.',
            'project_owner' => '1',
        ]);

		# Return Project
		return response()->json($project);

	}

	# Update
	public function update(Projects $project) {

	}

	# Delete
	public function delete(Projects $project) {

	}
}
