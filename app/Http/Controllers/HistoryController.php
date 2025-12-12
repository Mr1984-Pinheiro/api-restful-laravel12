<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Freight;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $phone = $request->input('phone');
        $phone = preg_replace('/[^0-9]/', '', $phone);

        $customer = Customer::where('phone', $phone)
                            ->with('senders', 'recipients')
                            ->first();

        if (empty($customer))
        {
            return redirect()->back()->with('error', 'Customer not found.');
        }

        return view('tracking.history', [
            'customer' => $customer,
        ]);
    }
}
