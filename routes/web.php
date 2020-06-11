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
//Cấu trúc Route : +Route::get('Đường dẫn', function () {  code php... });
            //     +Route::get('Đường dẫn', 'controller@hàm_xử_lý');

//frontend

Route::get('ajax','frontend\indexController@GetAjax');
Route::get('xuly','frontend\indexController@PostAjax');


Route::get('','frontend\indexController@GetIndex')->name('index.frontend');
Route::get('about','frontend\indexController@GetIndex');
Route::get('cost','frontend\CostController@getCost')->name('cost');;
Route::get('notification','frontend\NotificationController@getNotification');
Route::get('notification-detail/{id}','frontend\NotificationController@GetNotificationDetail');
Route::get('construction-detail/{id}','frontend\ConstructionController@GetConstructionDetail');
Route::get('construction','frontend\ConstructionController@getConstruction')->name('construction');
Route::get('project','frontend\ProjectController@getProject')->name('project');
Route::get('project-detail/{id}','frontend\ProjectController@GetProjectDetail')->name('project-detail');
Route::get('lien-he','frontend\indexController@LienHe')->name('lien_he');
Route::get('contact','frontend\indexController@GetIndex');
Route::post('search','frontend\SearchController@GetKey')->name('search.product');
Route::get('product_by_category/{id}','frontend\ProductByCategoryController@GetKey')->name('category.by.product');
Route::group(['prefix' => 'product','namespace'=>'frontend'], function () {
    Route::get('','ProductController@GetProduct')->name('product');;
    Route::get('detail/{id_product}','ProductController@GetDetail')->name('product-detail');;


    Route::get('checkout','ProductController@GetCheckOut');
    Route::post('checkout','ProductController@PostCheckOut');

    Route::get('AddCart','ProductController@AddCart');
    Route::get('del-cart/{rowId}','ProductController@DelCart');
    Route::get('update-cart/{rowId}/{qty}','ProductController@UpdateCart');
    Route::get('cart','ProductController@GetCart');


    Route::get('complete/{id_customer}','ProductController@GetComplete');
});


//backend
Route::get('login','backend\LoginController@GetLogin')->middleware('CheckLogin');
Route::post('login','backend\LoginController@PostLogin');

Route::group(['prefix' => 'admin','middleware'=>'CheckLogout','namespace'=>'backend'], function () {
    Route::get('','AdminController@GetIndex');
    Route::get('logout','LoginController@Logout');

    // notification
    Route::group(['prefix' => 'notification'], function () {
        Route::get('index', 'NotificationController@index')->name('notification.index');
        Route::get('notification/create', 'NotificationController@NotificationCreate')->name('notification.create');
        Route::post('notification/store', 'NotificationController@NotificationStore')->name('notification.store');
        Route::post('notification/update/{id}', 'NotificationController@NotificationUpdate')->name('notification.update');
        Route::get('notification/edit/{id}', 'NotificationController@NotificationEdit')->name('notification.edit');
        Route::any('notification/{id}/destroy','NotificationController@NotificationDestroy')->name('notification.destroy');
    });

    // project
    Route::group(['prefix' => 'project'], function () {
        Route::get('index', 'ProjectController@index')->name('project.index');
        Route::get('project/create', 'ProjectController@ProjectCreate')->name('project.create');
        Route::post('project/store', 'ProjectController@ProjectStore')->name('project.store');
        Route::post('project/update/{id}', 'ProjectController@ProjectUpdate')->name('project.update');
        Route::get('project/edit/{id}', 'ProjectController@ProjectEdit')->name('project.edit');
        Route::any('project/{id}/destroy','ProjectController@ProjectDestroy')->name('project.destroy');
    });

    // slide
    // 
    Route::group(['prefix' => 'slide'], function () {
        Route::get('index', 'SlideController@index')->name('slide.index');
        Route::get('slide/create', 'SlideController@SlideCreate')->name('slide.create');
        Route::post('slide/store', 'SlideController@SlideStore')->name('slide.store');
        Route::post('slide/update/{id}', 'SlideController@SlideUpdate')->name('slide.update');
        Route::get('slide/edit/{id}', 'SlideController@SlideEdit')->name('slide.edit');
        Route::any('slide/{id}/destroy','SlideController@SlideDestroy')->name('slide.destroy');
    });
     // construction
    Route::group(['prefix' => 'construction'], function () {
        Route::get('index', 'ConstructionController@index')->name('construction.index');
        Route::get('construction/create', 'ConstructionController@ConstructionCreate')->name('construction.create');
        Route::post('construction/store', 'ConstructionController@ConstructionStore')->name('construction.store');
        Route::post('construction/update/{id}', 'ConstructionController@ConstructionUpdate')->name('construction.update');
        Route::get('construction/edit/{id}', 'ConstructionController@ConstructionEdit')->name('construction.edit');
        Route::any('construction/{id}/destroy','ConstructionController@ConstructionDestroy')->name('construction.destroy');
    });
    // cost
    Route::group(['prefix' => 'cost'], function () {
        Route::get('index', 'CostController@index')->name('cost.index');
        Route::get('cost/create', 'CostController@costCreate')->name('cost.create');
        Route::post('cost/store', 'CostController@costStore')->name('cost.store');
        Route::post('cost/update/{id}', 'CostController@costUpdate')->name('cost.update');
        Route::get('cost/edit/{id}', 'CostController@costEdit')->name('cost.edit');
        Route::any('cost/{id}/destroy','CostController@costDestroy')->name('cost.destroy');
    });

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('','CategoryController@GetCategory');
        Route::post('','CategoryController@PostCategory');
        Route::get('edit/{id}','CategoryController@EditCategory');
        Route::post('edit/{id}','CategoryController@PostEditCategory');
        Route::get('del/{id_category}','CategoryController@DelCategory');
      
    });

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('','ProductController@ListProduct');
        Route::get('add','ProductController@AddProduct');
        Route::post('add','ProductController@PostAddProduct');
        Route::get('edit/{id_product}','ProductController@EditProduct');
        Route::post('edit/{id_product}','ProductController@PostEditProduct');
        Route::get('del/{id_product}','ProductController@DelProduct');

        //attr
        Route::get('attr','ProductController@GetAttr');
        Route::post('add-attr','ProductController@PostAddAttr');
        Route::get('edit-attr/{id_attr}','ProductController@GetEditAttr');
        Route::post('edit-attr/{id_attr}','ProductController@PostEditAttr');
        Route::get('del-attr/{id_attr}','ProductController@DelAttr');


        Route::post('add-value','ProductController@PostAddValue');
        Route::get('edit-value/{id_value}','ProductController@GetEditValue');
        Route::post('edit-value/{id_value}','ProductController@PostEditValue');
        Route::get('del-value/{id_value}','ProductController@DelValue');


       
        Route::get('add-variant/{id_product}','ProductController@AddVariant');
        Route::post('add-variant/{id_product}','ProductController@PostAddVariant');
        Route::get('edit-variant/{id_product}','ProductController@EditVariant');
        Route::post('edit-variant/{id_product}','ProductController@PostEditVariant');
    });

    //Order
    Route::group(['prefix' => 'order'], function () {
        Route::get('','OrderController@GetOrder');
        Route::get('proceed/{id_customer}','OrderController@proceed');
        Route::get('detail/{id_customer}','OrderController@DetailOrder');
    });

    
});
























