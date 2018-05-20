<?php

namespace thepirateorange\Apiarist\app\Http\Controllers\Web;

use Illuminate\Routing\Controller as Controller;
use thepirateorange\Apiarist\Apiarist;
use Illuminate\Http\Request;

class ExampleWebsiteController extends Controller
{
	# Controller Variables
	private $directory;
	private $project_id;

	# Construct
    public function __construct() {

		# Declare View Directory
		$this->directory = 'apiarist::example-website.';

		# Declare Project ID
		$this->project_id = 1;

    }

	# Home
	public function home() {

		# Data
		$data['project_id'] = $this->project_id;
		$data['page_id'] = 1;
		$data['views'] = Apiarist::getPageViews(1);

		# Get Project, 1 = Default Project, False = Don't Include Pages
		$data['project'] = Apiarist::getProject(1, false);
		$data['page_traffic'] = Apiarist::getProjectTraffic($this->project_id);

		# Return View
		return view($this->directory.'home')->with($data);

	}

	# About Us
	public function about_us() {

		# Data
		$data['project_id'] = $this->project_id;
		$data['page_id'] = 2;
		$data['views'] = Apiarist::getPageViews(2);

		# Return View
		return view($this->directory.'about')->with($data);

	}

	# Contact Us
	public function contact_us() {

		# Data
		$data['project_id'] = $this->project_id;
		$data['page_id'] = 3;
		$data['views'] = Apiarist::getPageViews(3);

		# Return View
		return view($this->directory.'contact')->with($data);

	}

}
