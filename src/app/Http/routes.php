<?php

Route::group([
    'namespace' => 'FiroCMS\Firo\App\Http\Controllers',
    'prefix' => 'admin'
], function () {

    // Dashboard
    Route::get('/', ['as' => 'firo.dashboard', 'uses' => 'DashboardController@index']);

    // Content
    Route::get('entries',    ['as' => 'firo.entries',    'uses' => 'EntriesController@index']);
    Route::get('taxonomies', ['as' => 'firo.taxonomies', 'uses' => 'TaxonomiesController@index']);

    // Structure
    Route::get('pages',      ['as' => 'firo.pages',      'uses' => 'DashboardController@index']);
    Route::get('layouts',    ['as' => 'firo.layouts',    'uses' => 'DashboardController@index']);
    Route::get('components', ['as' => 'firo.components', 'uses' => 'DashboardController@index']);
    Route::get('modules',    ['as' => 'firo.modules',    'uses' => 'DashboardController@index']);
    Route::get('partials',   ['as' => 'firo.partials',   'uses' => 'DashboardController@index']);

    // Other
    Route::get('users',     ['as' => 'firo.users',     'uses' => 'DashboardController@index']);
    Route::get('settings',  ['as' => 'firo.settings',  'uses' => 'DashboardController@index']);
    Route::get('variables', ['as' => 'firo.variables', 'uses' => 'DashboardController@index']);

    // Auth
    Route::group([
        'prefix' => 'auth'
    ], function() {
        Route::get('logout', ['as' => 'firo.auth.logout', 'uses' => 'DashboardController@index']);
    });
});

