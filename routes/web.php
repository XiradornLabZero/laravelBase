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

Route::get('customer/{id}', function($id) {
    $customer = App\Customer::find($id);
    echo $customer->name;

    echo "<ul>";
    foreach ($customer->orders as $order) {
        echo "<li>{$order->name}</li>";
    }
    echo "</ul>";
});

Route::get('customer_name', function() {
    $customer = App\Customer::where('name', '=', 'Tony')->first();
    echo $customer->id;
});


Route::get('orders', function() {
    $orders = App\Order::all();
    foreach ($orders as $order) {
        // $customer = App\Customer::find($order->customer_id); //senza relationship
        // echo "{$order->name} belongs to {$customer->name}<br>";
        echo "{$order->name} belongs to {$order->customer->name}<br>"; //con relashionship
    }
});

Route::get('page', function() {
    $data = array(
        'var1' => 'hamburger',
        'var2' => 'spaghetti',
        'var3' => 'meat',
        'orders' => App\Order::all()
    );
    return view('page', $data);
});
