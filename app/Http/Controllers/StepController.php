<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step;
use App\Http\Requests\StoreStepRequest;
use App\Models\Freight;
use App\Enums\Tickets;

class StepController extends Controller
{
    public function store(StoreStepRequest $request)
    {
        $freight = Freight::find($request->freight_id);

        if($freight->status == Tickets::DELIVERED) {
            return response()->json(['message' => 'Freight already delivered'], 400);
        }
        
        $step = Step::create($request->all());       

        $typeTicketsStatus = Tickets::fromName($request->type_step);        

        $freight->update([
            'status' => $typeTicketsStatus
        ]);

        return $step;
    }
}
