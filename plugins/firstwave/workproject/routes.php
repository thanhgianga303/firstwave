<?php

use Illuminate\Support\Facades\Route;
use Firstwave\Workproject\Controllers\ExampleController;
use Firstwave\Workproject\Controllers\ProjectController;

Route::get('api/projects/category/{id}', 'Firstwave\Workproject\Controllers\ProjectController@getByCategory')
->middleware('web');
Route::get('api/projects/project_deliverables/{id}', 'Firstwave\Workproject\Controllers\ProjectController@getByProjectDeliverables')
->middleware('web');