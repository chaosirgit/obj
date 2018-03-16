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

/**
 * 后台
 */
Route::group(['prefix' => 'admin', 'middleware' => ['AdminAuth']], function () {
    /**
     * 后台首页
     */
    Route::get('index','Admin\IndexController@index');                                      //后台首页
    Route::get('main','Admin\MainController@index');                                        //后台控制面板

    /**
     * 管理员
     */
    Route::get('admin_user','Admin\IndexController@adminUser');                             //管理员列表页
    Route::get('admin_user_list','Admin\IndexController@adminUserList');                    //管理员列表接口
    Route::get('admin_user_add','Admin\IndexController@adminUserAdd');                      //管理员添加页
    Route::get('admin_user_del','Admin\IndexController@delete');                            //管理员删除接口
    Route::post('admin_user_add','Admin\IndexController@postAdd');                          //管理员添加接口

    /**
     * 用户
     */
    Route::get('user','Admin\UserController@index');                                        //用户页面
    Route::get('user_list','Admin\UserController@userList');                                //用户列表接口
    Route::get('user_add','Admin\UserController@userAdd');                                 //用户添加页
    Route::post('user_add','Admin\UserController@postAdd');                                 //用户添加接口
    Route::get('user_del','Admin\UserController@delete');                                 //用户添加接口
});
