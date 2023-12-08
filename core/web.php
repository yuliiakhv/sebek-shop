<?php

use core\Route;

Route::get('', "MainController@index");
Route::get('shop', "MainController@shop");
Route::get('faq', "MainController@faq");
Route::get('contacts', "MainController@contacts");
Route::get('cart', "MainController@cart");
Route::get('product', "MainController@product");


