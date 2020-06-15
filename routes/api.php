<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [],
    function () {
        Route::group(
            [
                'namespace' => 'Api\\v1',
            ],
            function () {
                Route::post('register', 'Auth\AuthController@register');
                Route::post('login', 'Auth\AuthController@login');
            }
        );
        Route::group(
            [
                'middleware' => 'auth:api',
                'namespace' => 'Api\\v1',
            ],
            function () {
                Route::get('currency/{id}', 'Currency\CurrencyController@getById');
                Route::get('currencies', 'Currency\CurrencyController@all');
                Route::get('logout', 'Auth\AuthController@logout');
            }
        );
    }
);
