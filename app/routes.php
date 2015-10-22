<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@getIndex'));
Route::get('/top-5-del-verano', array('as' => 'top5', 'uses' => 'HomeController@getNuevasFormas'));
Route::get('/tu-look-por-menos', array('as' => 'tuLook', 'uses' => 'HomeController@getTuLook'));


Route::get('/sandalias', array('as' => 'Sandalias', 'uses' => 'HomeController@getSandalias'));
Route::get('/sandalias/nueva-temporada', array('as' => 'Sandalias', 'uses' => 'HomeController@getSandaliasNuevaTemporada'));
Route::get('/sandalias/ninos', array('as' => 'Sandalias', 'uses' => 'HomeController@getSandaliasNinos'));
Route::get('/sandalias/accesorios', array('as' => 'Sandalias', 'uses' => 'HomeController@getSandaliasAccesorios'));
Route::get('/sandalias/sandalias-por-menos', array('as' => 'Sandalias', 'uses' => 'HomeController@getSandaliasPorMenos'));
