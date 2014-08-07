<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('register', function()
{
   return View::make('register');
});

Route::get('authtest', array('before' => 'auth.basic', function()
{
    return View::make('athlete/home');
}));


Route::get('noplans', function()
{
    return View::make('noplans');
});

Route::get('athlete/home', function()
{
    return View::make('athlete/home');
});

Route::get('athlete/progress', function()
{
   return View::make('athlete/progress');
});

Route::get('athlete/log', function()
{
   return View::make('athlete/log');
});

Route::get('coach/home', function()
{
    return View::make('coach/home');
});

Route::get('coach/editplan', function()
{
    return View::make('coach/editplan');
});

Route::get('coach/trainingweek', function()
{
    return View::make('coach/trainingweek');
});

Route::get('coach/structure', function()
{
    return View::make('coach/structure');
});
//
//// Route group for API versioning
//Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function($id=3)
//{
//    Route::resource('member', 'MemberTblController');
// 
//
//});

Route::group(array('prefix' => 'api/v1', 'before' => 'Sentry|hasAccess:user'), function()
{
    Route::get('member', array('as' => 'user.index', 'uses' => 'MemberTblController@index'));
    
    Route::get('member/count', array('as' => 'user.count', 'uses' => 'MemberTblController@count'));

    Route::get('member/create', array('as' => 'user.create', 'uses' => 'MemberTblController@create'));

    Route::get('member/search', array('as' => 'user.search', 'uses' => 'MemberTblController@search'));

    Route::post('member', array('as' => 'user.store', 'uses' => 'MemberTblController@store'));

    Route::get('member/{id}', array('as' => 'user.show', 'uses' => 'MemberTblController@show'));

    Route::get('member/edit/{id}', array('as' => 'user.edit', 'uses' => 'MemberTblController@edit'));

    Route::post('member/update/{id}', array('as' => 'user.update', 'uses' => 'MemberTblController@update'));

    Route::get('member/delete/{id}', array('as' => 'user.destroy', 'uses' => 'MemberTblController@destroy'));
});