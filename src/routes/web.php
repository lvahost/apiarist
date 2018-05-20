<?php

# Apiarist Web Routes
Route::group(['prefix' => 'apiarist', 'namespace' => 'thepirateorange\Apiarist\app\Http\Controllers\Web'], function() {

	# Example Website
	Route::group(['prefix' => 'example-website'], function() {

		# Home
		Route::get('home', 'ExampleWebsiteController@home');

		# About Us
		Route::get('about-us', 'ExampleWebsiteController@about_us');

		# Contact Us
		Route::get('contact-us', 'ExampleWebsiteController@contact_us');

	});

});
