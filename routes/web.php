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

Route::get('/', function () {
    return view('welcome');
});

Route::get("func",function (){

    echo "app_path ".app_path()."<br/>";
    echo "base_path ".base_path('attachment.pdf')."<br/>";
    echo "config_path ".config_path()."<br/>";
    echo "database_path ".database_path()."<br/>";
    echo "public_path ".public_path()."<br/>";
    echo "resource_path ".resource_path()."<br/>";
    echo "storage_path ".storage_path()."<br/>";

    echo Str::slug('hello world yushuang')."<br/>";

    echo Str::uuid();

    $parrent=[
       ['parent'=>['id'=>1,'name'=>'James']] ,
       ['parent'=>['id'=>8,'name'=>'Lisa']] ,

    ]   ;
    dump(Arr::pluck($parrent,'parent.name')) ;

    logger('不好意思,错误了',['id'=>3]);

    logger()->error('An error occurred');

    dump(Arr::divide(['name'=>'James','age'=>33]));

}) ;



