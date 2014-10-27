<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);





Route::get('sign-up',['as'=> 'sign_up', 'uses' => 'UsersController@signUp']);

Route::post('sign-up',['as'=> 'register', 'uses' => 'UsersController@register']);

Route::post('login',['as'=> 'login', 'uses' => 'AuthController@login']);

Route::get('logout',['as'=> 'logout', 'uses' => 'AuthController@logout']);

Route::get('users', ['as' => 'users','before' => 'users_list', 'uses' => 'UsersController@users']);

Route::filter('users_list', function()
{
    if(!Auth::check())
    {
        return Redirect::to('/')->with('need_login',1);
    }
});


Route::post('delete',['as'=> 'delete', 'uses' => 'HomeController@index']);



// Forms

Route::get('account', ['as' => 'account', 'uses' => 'UsersController@account']);
Route::put('account', ['as' => 'update_account', 'uses' => 'UsersController@updateAccount']);

