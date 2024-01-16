<?php

use App\Core\Routing\Route;
use App\Middleware\block\blockFirefox;
  
Route::get('product/{slug}','postController@single');
Route::get('product/{slug}/comment/{comment_id}','postController@single');
Route::get('product/{slug}/comment/{comment_id}/reply/{reply_id}', 'postController@single');
Route::get('',function(){ 
});
Route::get('movies','homeController@movies',[blockFirefox::class]);

Route::add(['get',"put","post"],'a',function()
{
    echo 'welcome to here..';
});
Route::add(['get',"put","post"],'archieve','homeController@archieve');
Route::post('b',function(){
    echo "hello";
});