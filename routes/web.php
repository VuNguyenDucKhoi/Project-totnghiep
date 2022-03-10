<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ChuyenController;
use App\Http\Controllers\Admin\TuyenController;
use App\Http\Controllers\Admin\TauController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\BlogControler;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ChuyenHopDongController;
use App\Http\Controllers\Frontend\ChuyenCoDinhController;

Route::middleware(['auth'])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/', [HomeController::class, 'index'] )->name('admin');
        Route::get('main', [HomeController::class, 'index'] );

        //Menu
        Route::resource('chuyen', ChuyenController::class);
        Route::resource('chuyenhd', \App\Http\Controllers\Admin\ChuyenHDController::class);
        Route::prefix('chuyen')->group(function (){
            Route::get('edit/{chuyen}',[ChuyenController::class, 'show']);
            Route::post('edit/{chuyen}',[ChuyenController::class, 'update']);
            Route::DELETE('destroy',[ChuyenController::class, 'destroy']);
        });



        Route::prefix('tuyen')->group(function (){
            Route::get('addtuyen',[TuyenController::class, 'create']);
            Route::post('addtuyen',[TuyenController::class, 'store']);
            Route::get('edit/{tuyen}',[TuyenController::class, 'show']);
            Route::post('edit/{tuyen}',[TuyenController::class, 'update']);
            Route::DELETE('destroy',[TuyenController::class, 'destroy']);

        });
        Route::prefix('tau')->group(function (){
            Route::get('addtau',[TauController::class, 'create']);
            Route::post('addtau',[TauController::class, 'store']);
            Route::get('edit/{tau}',[TauController::class, 'show']);
            Route::post('edit/{tau}',[TauController::class, 'update']);
            Route::DELETE('destroy',[TauController::class, 'destroy']);
        });

        //Slider
        Route::prefix('slider')->group(function (){
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}',[SliderController::class, 'show']);
            Route::post('edit/{slider}',[SliderController::class, 'update']);
            Route::DELETE('destroy',[SliderController::class, 'destroy']);
        });

        //Blogs
        Route::prefix('blog')->group(function (){
            Route::get('add', [BlogControler::class, 'create']);
            Route::post('add', [BlogControler::class, 'store']);
            Route::get('list', [BlogControler::class, 'index']);
            Route::get('edit/{blog}',[BlogControler::class, 'show']);
            Route::post('edit/{blog}',[BlogControler::class, 'update']);

        });

        //Upload
        Route::post('upload/services',[UploadController::class, 'store']);

        //contact
        Route::get('/contact/list', [\App\Http\Controllers\Admin\ContactController::class, 'index']);
        Route::DELETE('/contact/reply',[\App\Http\Controllers\Admin\ContactController::class, 'reply']);

        //customer
        Route::get('/customer/list', [\App\Http\Controllers\Admin\CustomerController::class, 'index']);
        Route::DELETE('/customer/destroy', [\App\Http\Controllers\Admin\CustomerController::class, 'destroy']);

        Route::get('/payment/list', [\App\Http\Controllers\Admin\PaymentController::class, 'index']);
        Route::get('/payment/view/{id}', [\App\Http\Controllers\Admin\PaymentController::class, 'view']);
        Route::DELETE('/payment/destroy', [\App\Http\Controllers\Admin\PaymentController::class, 'destroy']);



    });
});

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('admin');
Route::DELETE('admin/blog/destroy',[BlogControler::class, 'destroy']);

//Frontend

Route::get('/', [MainController::class, 'index']);
Route::post('/services/load-product', [MainController::class, 'loadProduct']);
Route::get('/lienhe', [ContactController::class, 'index'] );
Route::post('/lienhe/sendmess',[ContactController::class, 'store']);
Route::get('/gioithieu', [AboutController::class, 'index']);
Route::get('tau-cao-toc/chuyen-co-dinh', [ChuyenCoDinhController::class, 'index']);
Route::get('tau-cao-toc/chuyen-hop-dong', [ChuyenHopDongController::class, 'index']);
Route::get('/tau-cao-toc/chuyen-co-dinh/{id}-{slug}.html', [\App\Http\Controllers\Frontend\ChuyenDetailController::class, 'index']);
Route::get('/tau-cao-toc/chuyen-hop-dong/{id}-{slug}.html', [\App\Http\Controllers\Frontend\ChuyenDetailController::class, 'indexhd']);
Route::post('/tau-cao-toc/chuyen-co-dinh/binh-luan',[\App\Http\Controllers\Frontend\ChuyenDetailController::class,'comment']);
Route::post('/tau-cao-toc/chuyen-hop-dong/binh-luan',[\App\Http\Controllers\Frontend\ChuyenDetailController::class,'comment']);



Route::get('/tintuc',[\App\Http\Controllers\Frontend\BlogController::class,'index']);
Route::get('/tintuc/{id}-{slug}.html', [\App\Http\Controllers\Frontend\BlogDetailController::class, 'index']);
Route::post('/tintuc/binh-luan',[\App\Http\Controllers\Frontend\BlogDetailController::class,'comment']);


Route::get('/tim-kiem', [\App\Http\Controllers\Frontend\SearchController::class, 'index']);
Route::get('/tim-kiem-theo-tuyen', [\App\Http\Controllers\Frontend\SearchController::class, 'search']);
Route::get('/tim-kiem', [\App\Http\Controllers\Frontend\SearchController::class, 'index']);

//cố định
Route::post('/dat-ve', [\App\Http\Controllers\Frontend\PaymentController::class, 'datve']);
Route::get('/dat-ve/thong-tin', [\App\Http\Controllers\Frontend\PaymentController::class, 'show']);
Route::post('/dat-ve/thong-tin', [\App\Http\Controllers\Frontend\PaymentController::class, 'addDatVe']);
Route::get('/dat-ve/thanh-toan', [\App\Http\Controllers\Frontend\PaymentController::class, 'thanhtoan']);
Route::get('/dat-ve/hoan-thanh', [\App\Http\Controllers\Frontend\PaymentController::class, 'hoanThanh']);

//hợp đồng

Route::post('/dat-ve-hd', [\App\Http\Controllers\Frontend\PaymentController::class, 'datvehd']);
Route::get('/dat-ve/thong-tin-hd', [\App\Http\Controllers\Frontend\PaymentController::class, 'showhd']);
Route::post('/dat-ve/thong-tin-hd', [\App\Http\Controllers\Frontend\PaymentController::class, 'addDatVehd']);
Route::get('/dat-ve/thanh-toan-hd', [\App\Http\Controllers\Frontend\PaymentController::class, 'thanhtoanhd']);
Route::get('/dat-ve/hoan-thanh-hd', [\App\Http\Controllers\Frontend\PaymentController::class, 'hoanThanhhd']);


Route::post('/thanh-toan-vnpay', [\App\Http\Controllers\Frontend\PaymentController::class, 'vnpayPayment']);
Route::post('/thanh-toan-momo', [\App\Http\Controllers\Frontend\PaymentController::class, 'momoPayment']);



