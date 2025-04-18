<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductCategories;



class ShopController extends Controller
{

    public function index()
    {
        $product=Products::all();
        $productCategories=ProductCategories::all();
        return view ('produk.index', compact('product', 'productCategories'));
    }

    public function product($id)
    {
        if (empty($id)) {
            abort(404, 'produk parameter is missing');
        }

        $product = Products::where('id', $id)->first();

        if (!$product) {
            abort(404, 'Produk tidak ditemukan');
        }

        return view('produk.detail', compact('product'));
    }

}
