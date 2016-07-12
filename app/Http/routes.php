<?php

/*
|--------------------------------------------------------------------------
| Application RoutesO
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('test');
// });
// Route::resource('user',"UserController");
/** 
* url 路由功能
*/
//  Route::get('/',function() {
// 	//return view('welcome');
// 	echo 'hello world'."<br>";
// 	echo date('Y-m-d H:i:s');
// });

 // 可以读取 配置项 Config:类 get: 静态成员方法 app 要读取的文件名称
 // echo Config::get('app.timezone')."<br>";
 // echo Config::get('app.locale')."<br>";

 //动态修改配置项
 // Config::set('app.timezone','UTF0');
 // echo Config::get('app.timezone')."<br>";

 // project\config\app.php 第199行
 // echo Config::get('apo.webname');

 //读取环境文件(.env)的配置 index.php?c=User&a=add http://localhost/User/add
 // echo env('DB_CONNECTION');
 

 //多个参数的传递 
 // Route::get('/goods/list/{name}-{id}', function($name, $id){
 // 	echo $name;
 // 	echo $id;
 // })->where('id','\d+')->where('name','[a-zA-Z]+');
 
 // Route::get('/test', function(){})->middleware('login');

 // Route::get('/login', function(){
 // 	echo 'name';
 // });

 // Route::get('/admin/user', 'UserController@index');

// Route::get('/admin',function(){
// 	return view('admin.index');
// });

// Route::get('/admin/user',function(){
// 	return view('admin.user');
// });
// Route::get('/admin/article/index', function(){
// 	return view('admin.article.index');
// });
//网站首页
Route::get('/', function () {
    return view('welcome');
});
//后台首页
Route::get('/admin','AdminController@index');
//登陆页面
Route::get('/admin/login', 'LoginController@index');
Route::post("/admin/login/logTodo", 'LoginController@logTodo');
//后台用户
Route::Controller('/admin/user','UserController');
//后台分类管理路由
Route::Controller('/admin/cate','CateController');
//后台文章
Route::Controller('/admin/article','ArticleController');