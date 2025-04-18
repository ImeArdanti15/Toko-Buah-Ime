<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use App\Models\ProductCategories;
use Illuminate\Validation\Rule;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilProduk()
    {

        $products = Products::all(); // Ambil semua produk dari database
        return view('produk.index', compact('products')); // Kirim variabel ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Products::all(); // Ambil semua produk dari database
        $productCategories = ProductCategories::all(); // Ambil semua produk dari database
        return view('produk.create', compact('productCategories', 'products')); // Kirim variabel ke view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => [
                'required',
                'max:255',
                Rule::unique('products')->ignore($request->id),
            ],
            'product_category_id' => 'required|exists:product_categories,id',
            'price' => 'required|numeric|min:0',
            'stock_quantity' => 'nullable|numeric|min:0',
            'desciption' => 'required|string|max:500',
            'image1' => 'required|image|max:2048',
            'image2' => 'nullable|image|max:2048',
            'image3' => 'nullable|image|max:2048',
            'image4' => 'nullable|image|max:2048',
            'image5' => 'nullable|image|max:2048',
        ],

        ['product_name.unique' => 'The product name already exists.']);

        $data = $request->only(['product_name', 'product_category_id', 'price', 'desciption']);

        $data['stock_quantity'] = 0;

        $data['image1'] = $request->file('image1')->store('Products/Photos');

        if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('Products/Photos');
        }
        if ($request->hasFile('image3')) {
            $data['image3'] = $request->file('image3')->store('Products/Photos');
        }
        if ($request->hasFile('image4')) {
            $data['image4'] = $request->file('image4')->store('Products/Photos');
        }
        if ($request->hasFile('image5')) {
            $data['image5'] = $request->file('image5')->store('Products/Photos');
        }

        Products::create($data);

        $products = App\Models\Products::all();
        return view ('produk.buah.index', [
            'products' => $products
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
