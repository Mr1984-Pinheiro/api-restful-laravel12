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
        $trackingCode = $request->input('tracking_code');

        $freight = Freight::where('tracking_code', $trackingCode)
            ->with('steps')
            ->first();
        
        if (empty($freight)) {
            return redirect()->back()->with('error', 'Shipping cost not found.');
        }
        
        return view('tracking.tracking', [
            'freight' => $freight
        ]);
    }
}
