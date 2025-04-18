<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductCategories;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=Products::all();
        return view ('dashboard.barang.index', compact('product'));

        // $product=Products::join('product_categories', 'products.product_category_id', '=', 'product_categories.id')->select('products.*', 'product_categories.category_name')->get();
        // return view ('dashboard.barang.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product=Products::all();
        $productCategories=ProductCategories::all();

        return view('dashboard.barang.create', compact('product', 'productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = DB::table('products')->where('product_name', '=', $request->product_name)->value('product_name');
        if ($data) {
            return view('dashboard.barang.create', [
                'status' => 'duplicate',
                'productCategories' => ProductCategories::all(),
                'product_name' => $request->product_name,
                'desciption' => $request->description,
                'price' => $request->price,
                'stock_quantity' => $request->stock_quantity,
                'image1' => $request->image1,
                'image2' => $request->image2,
                'image3' => $request->image3,
                'image4' => $request->image4,
                'image5' => $request->image5,
            ]);
        } else {
            $data = $request->only([
                'product_category_id', 'product_name', 'desciption', 'price', 'stock_quantity', 'image1', 'image2', 'image3', 'image4', 'image5', 'slug'
            ]);
            $data['image1'] = $request['image1']->store('Products/Photos');
            $data['image2'] = $request['image2']->store('Products/Photos');
            $data['image3'] = $request['image3']->store('Products/Photos');
            $data['image4'] = $request['image4']->store('Products/Photos');
            $data['image5'] = $request['image5']->store('Products/Photos');
            $save = Products::create($data);
            return redirect()->route('barang.index')->with('message', 'The new product data with the name '. $request->product_name .' has been sucessfully saved!');

    };
    }

    /**
     * Display the specified resource.
     */
    public function tampilProduk()
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
