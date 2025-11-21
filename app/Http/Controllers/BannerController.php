<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function getAllBanners() {
        
        $banners = Banner::all();
        
        $returnBanners = [];
        
        foreach ($banners as $banner) {
            $returnBanners[] = [
                'img' => asset('storage/' .$banner->file_path),
                'link' => $banner->link,
            ];
        }
        
        return $returnBanners;
    }
}
