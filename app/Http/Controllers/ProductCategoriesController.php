<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategories;
use Illuminate\Validation\Rule;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriproduk = ProductCategories::all();
        return view('dashboard.kategoriproduk.index', compact('kategoriproduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kategoriproduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => [
                'required',
                'max:255',
                Rule::unique('product_categories')->ignore($request->id),
            ],
        ], [
            'category_name.unique' => 'The product category name already exists.',
        ]);

        $data = $request->only(['category_name']);

        ProductCategories::create($data);

        $kategoriproduk = ProductCategories::all();
       return redirect()->route('kategoriproduk.index');
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
    public function edit($id)
    {
        $kategoriproduk = ProductCategories::find($id);
        return view('kategoriproduk.edit', compact('kategoriproduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategoriproduk = ProductCategories::find($id);
        $kategoriproduk->delete();
        return redirect()->route('kategoriproduk.index')->with('success', 'Kategori Produk Berhasil Dihapus');
    }
}
