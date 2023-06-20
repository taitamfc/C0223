<?php

use Illuminate\Support\Facades\Route;
// Admin
use App\Http\Controllers\Admin\UserController;

// Web
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\UserController as WebUserController;
use Illuminate\Http\Request; //$_REQUEST
// Query builder
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Order;

use App\Models\Product;
use App\Models\Room;
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

Route::get('products-bk',function(){
    // $items  = Product::all();
    // $item   = Product::find(1);
    // $items  = Product::where('price','=',20)
    // ->where('id','=',1)
    // ->get();
    // // ->first();

    // dd($items);

    // Them moi
    // $product = new Product();
    // $product->name = 'Iphone 15';
    // $product->price = 20;
    // $product->description = 'mo ta';
    // $product->image = 'image';
    // $product->user_id  = 1;
    // $product->save();

    // Cap nhat
    // $product = Product::find(1);
    // $product->name = 'Iphone 16';
    // $product->price = 20;
    // $product->description = 'mo ta';
    // $product->image = 'image';
    // $product->user_id  = 1;
    // $product->save();

    // Phan trang
    // $items = Product::where('price','=',10)->paginate(10);

    // Create
    // $data = [
    //     'name' => 'Iphone 17',
    //     'price' => 26,
    //     'description' => 'mo ta',
    //     'image' => 'image',
    //     'user_id' => 1,
    // ];
    // $saved = Product::create($data);
    dd($saved);

});

Route::get('products',function(){

    // $items = DB::table('products')->get();
    $item  = DB::table('products')->find(1);
    $item  = DB::table('products')->where('price','=',20)
    ->where('id','=',1)
    ->get();
    // ->first();

    // Them moi
    // $data = [
    //     'name' => 'Iphone',
    //     'price' => 20,
    //     'description' => 'mo ta',
    //     'image' => 'abc',
    //     'user_id' => 1
    // ];
    // DB::table('products')->insert($data);
    
    //where( column,operator,value )
    //where(column,value) column = value
    

    // $data = [
    //     'name' => 'Iphone',
    //     'price' => 20
    // ];
    // DB::table('products')
    //     ->where('id', 1)
    //     ->update($data);

    // Phan trang
    // $items = DB::table('products')->paginate(10);

    dd($saved);

});

Route::get('get_orders/{user_id}',function( $user_id ){
    $user = User::find($user_id); //SELECT * FROM `users` WHERE id = 1;
    $orders = $user->orders; //SELECT * FROM `orders` WHERE user_id = 1;

    $user = DB::table('users')->where('id',$user_id)->first();
    $orders = DB::table('orders')->where('user_id',$user_id)->get();

    dd($orders->toArray());
});

Route::get('get_order_room/{order_id}',function( $order_id ){
    $order = Order::find(1);
    $user = $order->user;
    $rooms = $order->rooms;
    dd($user->toArray());
});

Route::get('get_room_orders/{room_id}',function( $room_id ){
    $room = Room::find(1);
    $orders = $room->orders;
    dd($orders->toArray());
});


Route::get('/cart',function(){
    // $value = $request->session()->get('key');
    // Lay toan bo session cart
    $cart = session('cart',[]); //[]
    
    $product_ids = array_keys($cart);
    dd($cart);
});

Route::get('/addToCart/{id}/{qty?}',function($id,$qty = 1){
    /*
    $cart = [
        10 => 1,
        15 => 2,
    ];
    */
    $cart = session('cart',[]); //[]
    if( isset( $cart[$id] ) ){
        $cart[$id] = $cart[$id] + $qty;
    }else{
        $cart[$id] = $qty;
    }
    session(['cart' => $cart]);
});

Route::get('/updateCart/{id}/{qty}',function($id,$qty){
    //Cap nhat
    $cart = session('cart',[]); //[]
    $cart[$id] = $qty;
    session(['cart' => $cart]);
});

Route::get('/removeCart/{id}',function($id){
    //Cap nhat
    $cart = session('cart',[]); //[]
    unset( $cart[$id] );
    session(['cart' => $cart]);
});

Route::get('/removeAllCart',function(){
    session()->forget('cart');
});