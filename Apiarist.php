<?php

namespace thepirateorange\Apiarist;

use thepirateorange\Apiarist\app\Models\ApiaristProjects;
use thepirateorange\Apiarist\app\Models\ApiaristTraffic;
use thepirateorange\Apiarist\app\Models\ApiaristPages;

class Apiarist {

	# List All Projects
	public static function listProjects($num_results = 10, $pages = true) {

		# Gather Projects
		$projects = ApiaristProjects::paginate($num_results);

		$projects->fuwa = $pages;

		# Process Data
		if(strtolower($pages) === 'true' OR $pages === true) {
			foreach($projects as $project) {

				$project->pages = ApiaristPages::where('page_project', $project->id)->get();

			}
		}

		# Return Projects
		return $projects;

	}

	# Get Project
	public static function getProject($project_id, $pages = false) {

		# Find Project
		$data['project'] = ApiaristProjects::findOrFail($project_id);

		# [Optional] Include Project Pages
		if($pages) $data['pages'] = ApiaristPages::where('page_project', $project_id)->get();

		# Return Project
		return $data;

	}

	# Create Project
	public static function createProject($data) {

		# Create Project
		$project = ApiaristProjects::create($data);

		# Return Project
		return $project;

	}

	# Update Project
	public static function updateProject($project_id, $data) {
		// To Be Implemented
	}

	# Delete Project
	public static function deleteProject($project_id) {
		// To Be Implemented
	}

	# List Pages
	public static function listPages($project_id, $num_results = 10) {

		# Check If Project Exists
		$project = ApiaristProjects::findOrFail($project_id);

		# Find Pages
		$pages = ApiaristPages::where('page_project', $project->id)->paginate($num_results);

		# Return Pages
		return $pages;

	}

	# Get Page
	public static function getPage($page_id) {

		# Find Page
		$page = ApiaristPages::findOrFail($page_id);

		# Return Page
		return $page;

	}

	# Create Page
	public static function createPage($data) {

		# Create Page
		$page = ApiaristPages::create($data);

		# Return Page
		return $page;

	}

	# Update Page
	public static function updatePage($page_id) {
		// To Be Implemented
	}

	# Delete Page
	public static function deletePage($page_id) {
		// To Be Implemented
	}

	# Track Page
	public static function trackPage($page_id) {

		# Find Page
		$page = ApiaristPages::findOrFail($page_id);

		# Prepare Data
		$data['traffic_page'] = $page->id;
		$data['ip_address'] = $_SERVER['REMOTE_ADDR'];
		$data['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

		# Create
		$traffic = ApiaristTraffic::create($data);

		# Return Traffic
		return $traffic;

	}

	# Get Tracking Information
	public static function getTrackingInformation($page_id, $num_results = 10, $start_date = false, $end_date = false) {

		# Find Page
		$page = ApiaristPages::findOrFail($page_id);

		# Find Tracking Information
		$traffic = ApiaristTraffic::where('traffic_page', $page->id);

		# Paginate
		$traffic = $traffic->paginate($num_results);

		# Start Date
		if($start_date != false) $traffic->where('created_at', '>=', $start_date);

		# End Date
		if($end_date != false) $traffic->where('created_at', '<=', $end_date);

		# Return Traffic
		return $traffic;

	}



}
