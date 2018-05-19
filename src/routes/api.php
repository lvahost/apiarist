<?php

# API Routes
Route::group(['prefix' => 'api/apiarist', 'namespace' => 'thepirateorange\Apiarist\app\Http\Controllers\Api'], function() {

	Route::get('/', function() {

		return \thepirateorange\Apiarist\Apiarist::trackPage();

	});

    # Projects
    Route::group(['prefix' => 'projects'], function() {

        # List
        Route::get('list', 'ApiaristProjectsController@list');

        # Get
        Route::get('get/{project}', 'ApiaristProjectsController@get');

        # Store
        Route::post('store', 'ApiaristProjectsController@store');

        # Update
        Route::patch('update/{project}', 'ApiaristProjectsController@update');

        # Delete
        Route::delete('delete/{project}', 'ApiaristProjectsController@delete');

        # Pages
        Route::group(['prefix' => 'pages'], function() {

            # List
            Route::get('list/{project}', 'PagesController@list');

            # Get
            Route::get('get/{page}', 'PagesController@get');

            # Store
            Route::post('store', 'PagesController@store');

            # Update
            Route::patch('update/{page}', 'PagesController@update');

            # Delete
            Route::delete('delete/{page}', 'PagesController@delete');

            # Track
            Route::get('track/{page}');

        });

    });

});
