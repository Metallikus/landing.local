<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=>'Home',function () {
    return view('welcome');
    #echo "АЗАЗАЗАЗА";
}]);

Route::get('/article/{id}', ['as'=>'Article',function ($id) {
    echo $id;
}]);

Route::get('page/{cat}/{id}', function ($cat, $id) {
    #return view('page');
    echo '<pre>';
    echo $cat . ' | ' . $id;
    echo '</pre>';
})/*->where(['cat'=>'[A-Za-z]+',
    'id'=>'[0-9]+'])*/;

Route::group(['prefix' => 'admin'], function (){
    Route::get('page/create', function (){
        echo '<a href="'.route('Article', [25]).'">На главную</a>';
    });
    
    Route::get('page/edit', function (){
        echo 'edit';
    });
});