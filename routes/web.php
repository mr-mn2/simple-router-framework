<?php

use App\Core\Routing\Route;

Route::get('null');
Route::get('',function(){
    include BASE_PATH;
});
Route::get('movies','homeController@movies');

Route::add(['get',"put","post"],'a',function()
{
    echo 'welcome to here..';
});
Route::add(['get',"put","post"],'archieve','homeController@archieve');
Route::post('b',function(){
    echo "hello";
});