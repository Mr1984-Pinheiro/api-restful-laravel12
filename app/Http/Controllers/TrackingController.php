<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freight;

class TrackingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // tenta pegar do formulário (POST) ou da URL (GET)
        $trackingCode = $request->input('tracking_code')
            ?? $request->route('tracking_code');

        if (!$trackingCode) {
            return redirect()->back()->with('error', 'Tracking code not informed.');
        }

        $freight = Freight::where('tracking_code', $trackingCode)
            ->with('steps')
            ->first();

        if (!$freight) {
            return redirect()->back()->with('error', 'Shipping cost not found.');
        }

        return view('tracking.tracking', compact('freight'));
    }

}
