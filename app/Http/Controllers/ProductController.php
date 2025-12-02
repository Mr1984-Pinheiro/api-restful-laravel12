<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts() {

        $products = Product::with('images')->get();

        return response()->json([
            'error' => null,
            'products' => $products->map(function ($product) {

                $defaultImage = 'https://logosmarcas.net/wp-content/uploads/2020/09/Google-Emblema.png'; 
                $imagePath = optional($product->images->first())->url;
                
                return [
                    'id' => $product->id,
                    'label' => $product->label,
                    'price' => $product->price,
                    'image' => $imagePath
                            ? asset('/storage' . $imagePath)
                            : $defaultImage,
                    'liked' => false // TODO: Implementar lógica para verificar se o usuário curtiu o produto
                ];
            })
        ]);
    }
}


