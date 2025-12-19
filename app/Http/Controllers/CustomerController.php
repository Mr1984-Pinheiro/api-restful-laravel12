<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use Illuminate\Http\JsonResponse;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return response()->json($customers);
    }
    
    public function store(StoreCustomerRequest $request) :JsonResponse|Customer
    {
        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }
}
