<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@getIndex'));
Route::get('/nuevas-formas', array('as' => 'nuevasFormas', 'uses' => 'HomeController@getNuevasFormas'));
Route::get('/tu-look-por-menos', array('as' => 'tuLook', 'uses' => 'HomeController@getTuLook'));

