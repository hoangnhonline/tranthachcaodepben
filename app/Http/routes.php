<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['namespace' => 'Backend', 'prefix' => 'backend', 'middleware' => 'isAdmin'], function()
{
    
      
    Route::group(['prefix' => 'articles-cate'], function () {
        Route::get('/', ['as' => 'articles-cate.index', 'uses' => 'ArticlesCateController@index']);
        Route::get('/create', ['as' => 'articles-cate.create', 'uses' => 'ArticlesCateController@create']);
        Route::post('/store', ['as' => 'articles-cate.store', 'uses' => 'ArticlesCateController@store']);
        Route::get('{id}/edit',   ['as' => 'articles-cate.edit', 'uses' => 'ArticlesCateController@edit']);
        Route::post('/update', ['as' => 'articles-cate.update', 'uses' => 'ArticlesCateController@update']);
        Route::get('{id}/destroy', ['as' => 'articles-cate.destroy', 'uses' => 'ArticlesCateController@destroy']);
    }); 
    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', ['as' => 'tag.index', 'uses' => 'TagController@index']);
        Route::get('/create', ['as' => 'tag.create', 'uses' => 'TagController@create']);
        Route::post('/store', ['as' => 'tag.store', 'uses' => 'TagController@store']);
        Route::get('{id}/edit',   ['as' => 'tag.edit', 'uses' => 'TagController@edit']);
        Route::post('/update', ['as' => 'tag.update', 'uses' => 'TagController@update']);
        Route::get('{id}/destroy', ['as' => 'tag.destroy', 'uses' => 'TagController@destroy']);
    });
     Route::group(['prefix' => 'ykien'], function () {
        Route::get('/', ['as' => 'ykien.index', 'uses' => 'YkienController@index']);
        Route::get('/create', ['as' => 'ykien.create', 'uses' => 'YkienController@create']);
        Route::post('/store', ['as' => 'ykien.store', 'uses' => 'YkienController@store']);
        Route::get('{id}/edit',   ['as' => 'ykien.edit', 'uses' => 'YkienController@edit']);
        Route::post('/update', ['as' => 'ykien.update', 'uses' => 'YkienController@update']);
        Route::get('{id}/destroy', ['as' => 'ykien.destroy', 'uses' => 'YkienController@destroy']);
    });
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', ['as' => 'account.index', 'uses' => 'AccountController@index']);
        Route::get('/update-status/{status}/{id}', ['as' => 'account.update-status', 'uses' => 'AccountController@updateStatus']);
        Route::get('/create', ['as' => 'account.create', 'uses' => 'AccountController@create']);
        Route::post('/store', ['as' => 'account.store', 'uses' => 'AccountController@store']);
        Route::get('{id}/edit',   ['as' => 'account.edit', 'uses' => 'AccountController@edit']);
        Route::post('/update', ['as' => 'account.update', 'uses' => 'AccountController@update']);
        Route::get('{id}/destroy', ['as' => 'account.destroy', 'uses' => 'AccountController@destroy']);
    });
  
    Route::group(['prefix' => 'articles'], function () {
        Route::get('/', ['as' => 'articles.index', 'uses' => 'ArticlesController@index']);
        Route::get('/create', ['as' => 'articles.create', 'uses' => 'ArticlesController@create']);
        Route::post('/store', ['as' => 'articles.store', 'uses' => 'ArticlesController@store']);
        Route::get('{id}/edit',   ['as' => 'articles.edit', 'uses' => 'ArticlesController@edit']);
        Route::post('/update', ['as' => 'articles.update', 'uses' => 'ArticlesController@update']);
        Route::get('{id}/destroy', ['as' => 'articles.destroy', 'uses' => 'ArticlesController@destroy']);
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', ['as' => 'product.index', 'uses' => 'ProductController@index']);
        Route::get('/create', ['as' => 'product.create', 'uses' => 'ProductController@create']);
        Route::post('/store', ['as' => 'product.store', 'uses' => 'ProductController@store']);
        Route::get('{id}/edit',   ['as' => 'product.edit', 'uses' => 'ProductController@edit']);
        Route::post('/update', ['as' => 'product.update', 'uses' => 'ProductController@update']);
        Route::get('{id}/destroy', ['as' => 'product.destroy', 'uses' => 'ProductController@destroy']);
    });
    Route::group(['prefix' => 'images'], function () {
        Route::get('/', ['as' => 'images.index', 'uses' => 'ImagesController@index']);
        Route::get('/create', ['as' => 'images.create', 'uses' => 'ImagesController@create']);
        Route::post('/store', ['as' => 'images.store', 'uses' => 'ImagesController@store']);
        Route::get('{id}/edit',   ['as' => 'images.edit', 'uses' => 'ImagesController@edit']);
        Route::post('/update', ['as' => 'images.update', 'uses' => 'ImagesController@update']);
        Route::get('{id}/destroy', ['as' => 'images.destroy', 'uses' => 'ImagesController@destroy']);
    });
    Route::group(['prefix' => 'pages'], function () {
        Route::get('/', ['as' => 'pages.index', 'uses' => 'PagesController@index']);
        Route::get('/create', ['as' => 'pages.create', 'uses' => 'PagesController@create']);
        Route::post('/store', ['as' => 'pages.store', 'uses' => 'PagesController@store']);
        Route::get('{id}/edit',   ['as' => 'pages.edit', 'uses' => 'PagesController@edit']);
        Route::post('/update', ['as' => 'pages.update', 'uses' => 'PagesController@update']);
        Route::get('{id}/destroy', ['as' => 'pages.destroy', 'uses' => 'PagesController@destroy']);
    });  
    Route::group(['prefix' => 'category'], function () {
        Route::get('/{parent_id?}', ['as' => 'category.index', 'uses' => 'CategoryController@index'])->where('parent_id', '[0-9]+');
        Route::get('/create', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
        Route::post('/store', ['as' => 'category.store', 'uses' => 'CategoryController@store']);
        Route::post('/ajax-list-by-parent', ['as' => 'category.ajax-list-by-parent', 'uses' => 'CategoryController@ajaxListByParent']);
        
        Route::get('{id}/edit',   ['as' => 'category.edit', 'uses' => 'CategoryController@edit']);
        Route::post('/update', ['as' => 'category.update', 'uses' => 'CategoryController@update']);
        Route::get('{id}/destroy', ['as' => 'category.destroy', 'uses' => 'CategoryController@destroy']);
    });
    Route::group(['prefix' => 'album'], function () {
        Route::get('/{parent_id?}', ['as' => 'album.index', 'uses' => 'AlbumController@index'])->where('parent_id', '[0-9]+');
        Route::get('/create', ['as' => 'album.create', 'uses' => 'AlbumController@create']);
        Route::post('/store', ['as' => 'album.store', 'uses' => 'AlbumController@store']);
        Route::post('/ajax-list-by-parent', ['as' => 'album.ajax-list-by-parent', 'uses' => 'AlbumController@ajaxListByParent']);
        
        Route::get('{id}/edit',   ['as' => 'album.edit', 'uses' => 'AlbumController@edit']);
        Route::post('/update', ['as' => 'album.update', 'uses' => 'AlbumController@update']);
        Route::get('{id}/destroy', ['as' => 'album.destroy', 'uses' => 'AlbumController@destroy']);
    });
    Route::group(['prefix' => 'video'], function () {
        Route::get('/{parent_id?}', ['as' => 'video.index', 'uses' => 'VideoController@index'])->where('parent_id', '[0-9]+');
        Route::get('/create', ['as' => 'video.create', 'uses' => 'VideoController@create']);
        Route::post('/store', ['as' => 'video.store', 'uses' => 'VideoController@store']);
        Route::post('/ajax-list-by-parent', ['as' => 'video.ajax-list-by-parent', 'uses' => 'VideoController@ajaxListByParent']);
        
        Route::get('{id}/edit',   ['as' => 'video.edit', 'uses' => 'VideoController@edit']);
        Route::post('/update', ['as' => 'video.update', 'uses' => 'VideoController@update']);
        Route::get('{id}/destroy', ['as' => 'video.destroy', 'uses' => 'VideoController@destroy']);
    });  
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', ['as' => 'settings.index', 'uses' => 'SettingsController@index']);
        Route::post('/update', ['as' => 'settings.update', 'uses' => 'SettingsController@update']);     
    });
    
    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', ['as' => 'tag.index', 'uses' => 'TagController@index']);
        Route::get('/create', ['as' => 'tag.create', 'uses' => 'TagController@create']);
        Route::post('/store', ['as' => 'tag.store', 'uses' => 'TagController@store']);       
        
        Route::get('{id}/edit',   ['as' => 'tag.edit', 'uses' => 'TagController@edit']);
        Route::post('/update', ['as' => 'tag.update', 'uses' => 'TagController@update']);
        Route::get('{id}/destroy', ['as' => 'tag.destroy', 'uses' => 'TagController@destroy']);
    });
    Route::post('/tmp-upload', ['as' => 'image.tmp-upload', 'uses' => 'UploadController@tmpUpload']);
    Route::post('/update-order', ['as' => 'update-order', 'uses' => 'GeneralController@updateOrder']);
    Route::post('/get-slug', ['as' => 'get-slug', 'uses' => 'GeneralController@getSlug']);
    Route::post('/get-film-external', ['as' => 'general.get-film-external', 'uses' => 'GeneralController@getFilmExternal']);
});
Route::group(['namespace' => 'Frontend'], function()
{
     Route::get('{slug}-{id}', ['as' => 'loaisp', 'uses' => 'HomeController@loaisp']);
     Route::get('load-box', ['as' => 'load-box', 'uses' => 'HomeController@loadBox']);
     Route::get('/bang-gia/{slug}-{id}.html', ['as' => 'detail-price', 'uses' => 'HomeController@detailPrice']);
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('/lien-he.html', ['as' => 'lienhe', 'uses' => 'HomeController@lienhe']);
    Route::get('/bang-gia.html', ['as' => 'bang-gia', 'uses' => 'HomeController@bangGia']);
    Route::get('/{slug}', ['as' => 'news-list', 'uses' => 'HomeController@newsList']);
    Route::get('/tin-tuc/{slug}-{id}.html', ['as' => 'news-detail', 'uses' => 'HomeController@newsDetail']);
    Route::get('/san-pham', ['as' => 'san-pham', 'uses' => 'HomeController@sanpham']);
    Route::get('/gioi-thieu.html', ['as' => 'gioithieu', 'uses' => 'HomeController@gioithieu']);
   
    Route::get('san-pham/{slug}-{id}.html', ['as' => 'chitietsp', 'uses' => 'HomeController@chitietsp']);
});


// Authentication routes...
Route::get('backend/login', ['as' => 'backend.login-form', 'uses' => 'Backend\UserController@loginForm']);
Route::post('backend/login', ['as' => 'backend.check-login', 'uses' => 'Backend\UserController@checkLogin']);
Route::get('backend/logout', ['as' => 'backend.logout', 'uses' => 'Backend\UserController@logout']);
