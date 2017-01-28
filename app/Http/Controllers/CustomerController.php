<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

class CustomerController extends Controller
{
    //
    public function customer($id) {
        // $customer = Customer::find($id);
        // echo $customer->name;
        //
        // echo "<ul>";
        // foreach ($customer->orders as $order) {
        //     echo "<li>{$order->name}</li>";
        // }
        // echo "</ul>";

        // we want use a view NOT a pure code inside. Is a better solutions
        // for keep code clean

        $customer = Customer::find($id);
        // return view('customer', array( 'customer' => $customer ));
        // better to use compact for array compose
        return view('customer', compact('customer'));

    }
}
