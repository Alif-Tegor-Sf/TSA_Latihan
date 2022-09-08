<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer(){
        $customer = Customer::all();
        return view('customer', ['data' => $customer], ['title' => 'Customer']);
    }
}
