<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('profile', 'ProfileController@index')->name('my.profile');
    Route::post('profile', 'ProfileController@update')->name('my.profile.update');
    Route::get('change-password', 'ProfileController@change_password')->name('my.profile.change.password');
    Route::post('change-password', 'ProfileController@change_password_update')->name('my.profile.change.password.update');

    // properties
    Route::get('properties', 'ProfileController@my_properties')->name('my.properties');
    Route::get('properties/edit/{id}', 'PropertyController@edit')->name('my.properties.edit');
    Route::post('properties/update/{id}', 'PropertyController@update')->name('my.properties.update');
    Route::get('properties/create', 'PropertyController@create')->name('my.properties.create');
    Route::delete('properties/destroy/{id}', 'PropertyController@destroy')->name('my.properties.destroy');
    Route::post('properties', 'PropertyController@store')->name('properties.store');


    // contact with agent
    Route::post('contact-agent', 'HomeController@contact_agent')->name('contact.agent');
});

Route::get('admin/login', 'AdminController@login_page')->name('admin.login_page');
Route::group(['middleware' => ['admin'], 'prefix' => 'admin/dashboard/'], function () {
    Route::get('', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('users', 'AdminController@users')->name('admin.dashboard.users');
    Route::get('properties', 'AdminController@properties')->name('admin.dashboard.properties');
    Route::get('make-featured/{id}', 'AdminController@make_featured')->name('admin.dashboard.make.featured');
    Route::get('remove-featured/{id}', 'AdminController@remove_featured')->name('admin.dashboard.remove.featured');

    // pending
    Route::get('accept/{id}', 'AdminController@accept')->name('admin.dashboard.accept');
    Route::get('reject/{id}', 'AdminController@reject')->name('admin.dashboard.reject');
});

Auth::routes();

Route::post('get-cities/{id}', 'PropertyController@get_areas')->name('get.cities');

//Route::get('/home', 'HomeController@index')->name('home');

// about us
Route::get('about-us', function () {
    return view('about-us');
})->name('about.us');

// Search
Route::get('search', 'HomeController@search')->name('search');
// feed
Route::get('feed', 'HomeController@feed')->name('feed');
Route::get('feed/filter', 'HomeController@filter')->name('filter');
Route::get('feed/properties/{id}', 'HomeController@single')->name('feed.properties.single');
