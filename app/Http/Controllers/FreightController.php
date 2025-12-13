<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freight;
use App\Enums\Tickets;
use App\Http\Requests\StoreFreightRequest;
use App\Helpers;

class FreightController extends Controller
{
    public function store(StoreFreightRequest $request) 
    {
        $data = $request->all();
        $data['tracking_code'] = Helpers::generateTrackingCode();
        $data['status'] = Tickets::IN_PROGRESS->value;

        $freight = Freight::create($data);

        return $freight;
    }
}
