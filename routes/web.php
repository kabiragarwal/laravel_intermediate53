<?php

use App\User;
use App\Events\UserWasBanned;

Route::get('/', function () {
            return view('welcome');
        });


Route::get('login', function() {
            User::truncate();
            $user = User::create([
                        'name' => 'JhonDoe1',
                        'email' => 'jhondoe@example.com',
                        'password' => bcrypt('password'),
                        'plan' => 'yearly'
            ]);

            Auth::login($user);

            return redirect('/');
        });

Route::get('subscribed', ['middleware' => 'subscribed:yearly', function() {
        return 'you can only view this page if you are login and subscribed for yearly plan';
    }]);

Route::get('event', function(){
   $user = User::find(1);
   event(new UserWasBanned($user));
});

Route::get('reports', 'ReportsController@index');
