<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function showCustomer(){
        $customers=DB::table('customers')
        ->join('locations', 'customers.address_id' ,'=' ,'locations.id')
        ->select('Customers.*','locations.address')
        ->paginate(10);
        // dd($customers);
        return view('frontend/customersAll', compact('customers'));
    }
}
