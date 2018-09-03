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

Route::namespace('Financial')->prefix('financial')->group(function (){
    $this->get('/index' , 'GroupAccentingController@index');//مشاهده درخت حساب های کل و معین
    $this->get('/' , 'GroupAccentingController@index');// مشاهده حساب های کل و معین
    $this->resource('group' , 'GroupAccentingController');
    $this->get('group-tree-view',['uses'=>'GroupAccentingController@manageGroup']);
    $this->post('add-group',['as'=>'add.group','uses'=>'GroupAccentingController@addGroup']);//اضافه کرن حساب های کل
    $this->post('update-group',['as'=>'update.group','uses'=>'GroupAccentingController@updateGroup']);//اضافه کرن حساب های کل
    $this->post('add-helper',['as'=>'add.helper','uses'=>'GroupAccentingController@addHelper']);//اضافه کردن حساب های معین
    $this->get('/detailed' , 'DetailedController@detailed');// مشاهده درخت حساب های تفضیلی
    $this->get('detailed-tree-view',['uses'=>'DetailedController@manageDetailed']);
    $this->post('add-detailed',['as'=>'add.detailed','uses'=>'DetailedController@addDetailed']);// ثبت حساب های تفضیلی جدید
    $this->resource('/documents', 'DocumentsController');// روت اسناد مالی
    //$this->get('/documents', 'DocumentsController@Detailed');//روت درخت لایت باکس تفضیلی در صفحه ایجاد اسناد
    $this->get('/documents', 'DocumentsController@Group');//روت درخت لایت باکس معین در صفحه ایجاد اسناد
});
Route::get('/', function (){
    return view('welcome');
});