<?php

use Illuminate\Support\Facades\Route;
// Admin
use App\Http\Controllers\Admin\UserController;

// Web
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\UserController as WebUserController;
use Illuminate\Http\Request; //$_REQUEST
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Admin
Route::group([
    'prefix' => 'users'
],function(){
    Route::get('/',[UserController::class,'index'])->name('users.index');
    Route::get('create',[UserController::class,'create'])->name('users.create');
    Route::post('/',[UserController::class,'store'])->name('users.store');
    Route::get('/{id}',[UserController::class,'show'])->name('users.show');
    Route::get('/{id}/edit',[UserController::class,'edit'])->name('users.edit');
    Route::put('/{id}',[UserController::class,'update'])->name('users.update');
    Route::delete('/{id}',[UserController::class,'destroy'])->name('users.destroy');
});

// Route::resource('users',UserController::class);


// Web
// Route::get('/', HomeController::class);
Route::get('login', [WebUserController::class,'login']);
Route::get('danhmuc/{name}', function () {
    return 'Trang danh sach may tinh';
});
Route::get('sanpham/{name}', function () {
    return 'Trang danh sach may tinh';
});
Route::get('giohang', function(){
    return 'day la gio hang';
});
Route::post('xulygiohang', function(){
    return 'day la gio hang';
});
Route::get('lienhe', function(){
    return 'day la lien he';
});
Route::post('xulylienhe', function(){
    return 'day la lien he';
});
Route::get('thanhtoan', function(){
    return 'day la thanh toan';
});
Route::post('xulythanhtoan', function(){
    return 'day la thanh toan';
});

Route::get('link-18', function(){
    echo 'day la noi dung 18';
})->middleware('checkAge');

Route::get('home', function(){
    echo 'trang chu';
})->name('home');


Route::get('admin', function(){
    $name = 'NVA';
    return view('admin',compact('name'));
})->middleware('CheckView');

Route::get('/',function(){
    return view('admin.layouts.master');
});

Route::get('/dang-nhap',function(){
    return view('admin.layouts.blank');
});