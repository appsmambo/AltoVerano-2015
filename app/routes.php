<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@getIndex'));
Route::get('/top-5-del-verano', array('as' => 'top5', 'uses' => 'HomeController@getTop5'));
Route::get('/tu-look-por-menos', array('as' => 'tuLook', 'uses' => 'HomeController@getTuLook'));


Route::get('/sandalias', array('as' => 'Sandalias', 'uses' => 'HomeController@getSandalias'));
Route::get('/sandalias/top-10-verano', array('as' => 'nuevaTemporada', 'uses' => 'HomeController@getSandaliasNuevaTemporada'));
Route::get('/sandalias/ninos', array('as' => 'ninos', 'uses' => 'HomeController@getSandaliasNinos'));
Route::get('/sandalias/accesorios', array('as' => 'accesorios', 'uses' => 'HomeController@getSandaliasAccesorios'));
Route::get('/sandalias/sandalias-por-menos', array('as' => 'sandaliasPorMenos', 'uses' => 'HomeController@getSandaliasPorMenos'));
