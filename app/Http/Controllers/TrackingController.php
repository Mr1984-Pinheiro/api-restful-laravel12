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
        $freight = Freight::where('tracking_code', $request->tracking_code)
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
