<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('admin/dang-nhap', 'AdminController@getLoginAdmin');
Route::post('admin/dang-nhap', 'AdminController@postLoginAdmin');
Route::get('admin/dang-xuat', 'AdminController@getLogoutAdmin');
Route::post('/resign-email', 'SendMailController@send_mail')->name('send_mail');

Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function () {
    Route::get('/', function () {
        $product = DB::table('product')
            ->select(DB::raw('count(name) as product_count'))
            ->get();
        $new = DB::table('news')
            ->select(DB::raw('count(title) as new_count'))
            ->get();

        $user = DB::table('users')
            ->select(DB::raw('count(name) as user_count'))
            ->where('level', 0)
            ->get();

        $dathanhtoan = DB::table('bill')
            ->select(DB::raw('sum(total) as sum_bill'))
            ->where('status', 1)
            ->get();

        $dangxuly = DB::table('bill')
            ->select(DB::raw('sum(total) as sum_bill'))
            ->where('status', 0)
            ->get();

        $nhacungcap = DB::table('category')
            ->select(DB::raw('count(name) as nhacungcap_count'))
            ->get();
        // dd($product);
        return view('admin.dashboard', compact('product', 'user', 'dathanhtoan',  'dangxuly', 'nhacungcap', 'new'));
    });

    Route::group(['prefix' => 'thong-tin'], function () {
        Route::get('/', 'AdminController@getInformation');
        Route::post('/', 'AdminController@postInformation');
    });

    Route::group(['prefix' => 'hang-san-xuat'], function () {
        Route::get('/', 'CategoryController@getList');
        Route::get('danh-sach', 'CategoryController@getList');

        Route::get('doi-trang-thai/{id}', 'CategoryController@getChangeActive');

        Route::get('sua/{id}', 'CategoryController@getEdit');
        Route::post('sua/{id}', 'CategoryController@postEdit');

        Route::get('them', 'CategoryController@getAdd');
        Route::post('them', 'CategoryController@postAdd');

        Route::get('xoa/{id}', 'CategoryController@getDelete');
    });

    Route::group(['prefix' => 'dong-san-pham'], function () {
        Route::get('/', 'TypeProductController@getList');
        Route::get('danh-sach', 'TypeProductController@getList');

        Route::get('sua/{id}', 'TypeProductController@getEdit');
        Route::post('sua/{id}', 'TypeProductController@postEdit');

        Route::get('them', 'TypeProductController@getAdd');
        Route::post('them', 'TypeProductController@postAdd');

        Route::get('xoa/{id}', 'TypeProductController@getDelete');
    });

    Route::group(['prefix' => 'san-pham'], function () {
        Route::get('/', 'ProductController@getList');
        Route::get('danh-sach', 'ProductController@getList');

        Route::get('doi-do-hot/{id}', 'ProductController@getChangeHot');

        Route::get('sua/{id}', 'ProductController@getEdit');
        Route::post('sua/{id}', 'ProductController@postEdit');

        Route::get('them', 'ProductController@getAdd');
        Route::post('them', 'ProductController@postAdd');

        Route::get('xoa/{id}', 'ProductController@getDelete');
    });

    Route::group(['prefix' => 'danh-muc-tin-tuc'], function () {
        Route::get('/', 'CategoryNewController@getList');
        Route::get('danh-sach', 'CategoryNewController@getList');
        Route::get('doi-trang-thai/{id}', 'CategoryNewController@getChangeActive');

        Route::get('sua/{id}', 'CategoryNewController@getEdit');
        Route::post('sua/{id}', 'CategoryNewController@postEdit');

        Route::get('them', 'CategoryNewController@getAdd');
        Route::post('them', 'CategoryNewController@postAdd');

        Route::get('xoa/{id}', 'CategoryNewController@getDelete');
    });

    Route::group(['prefix' => 'tin-tuc'], function () {
        Route::get('/', 'NewController@getList');
        Route::get('danh-sach', 'NewController@getList');
        Route::get('sua/{id}', 'NewController@getEdit');
        Route::post('sua/{id}', 'NewController@postEdit');
        Route::get('them', 'NewController@getAdd');
        Route::post('them', 'NewController@postAdd');
        Route::get('xoa/{id}', 'NewController@getDelete');
    });

    Route::group(['prefix' => 'slide'], function () {
        Route::get('/', 'SlideController@getList');
        Route::get('danh-sach', 'SlideController@getList');

        Route::get('doi-trang-thai/{id}', 'SlideController@getChangeActive');

        Route::get('sua/{id}', 'SlideController@getEdit');
        Route::post('sua/{id}', 'SlideController@postEdit');

        Route::get('them', 'SlideController@getAdd');
        Route::post('them', 'SlideController@postAdd');

        Route::get('xoa/{id}', 'SlideController@getDelete');
    });

    Route::group(['prefix' => 'hoa-don'], function () {
        Route::get('/', 'BillController@getList');
        Route::get('danh-sach', 'BillController@getList');

        Route::get('doi-trang-thai/{id}', 'BillController@getChangeStatus');

        Route::get('xoa/{id}', 'BillController@getDelete');
    });

    Route::group(['prefix' => 'nguoi-dung'], function () {
        Route::get('/', 'UserController@getList');
        Route::get('danh-sach', 'UserController@getList');
        Route::get('xoa/{id}', 'UserController@getDelete');
    });

    Route::group(['prefix' => 'setting'], function () {
        Route::get('gioi-thieu/{id}', 'SettingController@updateGioithieu');
        Route::post('gioi-thieu/{id}', 'SettingController@postupdateGioithieu');

        Route::get('lien-he/{id}', 'SettingController@updateLienhe');
        Route::post('lien-he/{id}', 'SettingController@postupdateLienhe');
    });

    Route::group(['prefix' => 'quan-tri-vien', 'middleware' => 'adminLevel'], function () {
        Route::get('/', 'AdminController@getList');
        Route::get('danh-sach', 'AdminController@getList');

        Route::get('doi-cap-do/{id}', 'AdminController@getChangeLevel');

        Route::get('sua/{id}', 'AdminController@getEdit');
        Route::post('sua/{id}', 'AdminController@postEdit');

        Route::get('them', 'AdminController@getAdd');
        Route::post('them', 'AdminController@postAdd');

        Route::get('xoa/{id}', 'AdminController@getDelete');
    });

    Route::group(['prefix' => 'danh-gia'], function () {
        Route::get('xoa/{id}', 'ReviewProductController@getDelete');
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('type-product/{id}', 'AjaxController@getTypeProduct');
    });
});

Auth::routes();

Route::get('/tim-kiem', 'PagesController@getSearch');

Route::get('/', 'PagesController@getIndex');

Route::get('/trang-chu', 'PagesController@getIndex');

Route::get('/gioi-thieu', 'PagesController@getAbout');

Route::get('/lien-he', 'PagesController@getContact');



Route::group(['prefix' => 'tin-tuc'], function () {
    Route::get('/', 'PagesController@getNew');
    Route::get('danh-muc/{id}', 'PagesController@getNewSecond');
    Route::get('chi-tiet/{id}', 'PagesController@getDetailNew');
});

Route::get('/giao-nhan', 'PagesController@getDelivery');

Route::get('/faq', 'PagesController@getFaq');

Route::get('/tat-ca-san-pham', 'PagesController@getAllProduct');

Route::get('/them-gio-hang/{id}/{qty}', 'PagesController@getAddToCart');

Route::get('/cap-nhat-gio-hang/{id}/{qty}', 'PagesController@getUpdateCart');

Route::get('/xoa-san-pham-gio-hang/{id}', 'PagesController@getDeleteItemCart');

Route::get('/gio-hang', 'PagesController@getShoppingCart');

Route::get('/dang-ky', 'PagesController@getRegister');
Route::post('/dang-ky', 'PagesController@postRegister');

Route::get('/dang-nhap', 'PagesController@getLogin');
Route::post('/dang-nhap', 'PagesController@postLogin');

Route::get('/thong-tin-nguoi-dung', 'PagesController@getUserInformation');
Route::post('/thong-tin-nguoi-dung', 'PagesController@postUserInformation');

Route::get('/don-hang/{id}', 'PagesController@getDonhang');

Route::get('/doi-mat-khau', 'PagesController@getChangePassword');
Route::post('/doi-mat-khau', 'PagesController@postChangePassword');

Route::get('/dang-xuat', 'PagesController@getLogout');

Route::get('/thanh-toan', 'PagesController@getCheckout');
Route::post('/thanh-toan', 'PagesController@postCheckout');

Route::get('/chi-tiet-san-pham/{slugProduct}', 'PagesController@getProduct');

Route::get('/{slugCategory}', 'PagesController@getCategory');

Route::get('/{slugCategory}/{slugTypeProduct}', 'PagesController@getTypeProduct');

Route::post('/them-danh-gia', 'PagesController@postAddReview');
