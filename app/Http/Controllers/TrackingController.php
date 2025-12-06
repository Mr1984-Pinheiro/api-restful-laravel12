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
        $freight = Freight::where('tracking_code', 'SP-RJ-001')
            ->with('steps')
            ->first();
        //dd($freight->steps);
        return view('tracking.tracking', [
            'freight' => $freight
        ]);
    }
}
