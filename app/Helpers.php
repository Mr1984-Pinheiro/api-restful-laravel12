<?php

namespace App;

use Illuminate\Support\Str;
use App\Models\Freight;

class Helpers
  
{
  public static function generateTrackingCode(): string
  {
    do {
      $trackingCode = Str::upper(Str::random(8));

      $exists = Freight::where('tracking_code', $trackingCode)->exists();
      
    }  while ($exists);

    return $trackingCode;
  }
  
}