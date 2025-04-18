<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Cart;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $items = Wishlists::all();
        return view('wishlist.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */

     public function addToWishlist(Request $request)
     {
         $product = Products::find($request->id);
             $user = Auth::user();

         Cart::instance('wishlist_' . $user->id)->add(
             $product->id,
             $product->name,
             1,
             $product->price,
             [
                 'user_id' => $user->id,
                 'added_at' => now()
             ]
         )->associate('App\Models\Products');

         return redirect()->back()->with('success', 'Product added to wishlist!');
     }

    /**
     * Store a newly created resource in storage.
     */
    public function getWishlistedProducts()
    {
        $items = Cart::instance("wishlist")->content();
        return view('wishlist.index',['items'=>$items]);
    }

    /**
     * Display the specified resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        // Simpan data ke dalam tabel Wishlist
        $wishlist = new Wishlist();
        $wishlist->product_id = $request->id;
        $wishlist->name = $request->name;
        $wishlist->quantity = $request->quantity;
        $wishlist->price = $request->price;
        $wishlist->save();

        // Berikan respons JSON bahwa produk telah berhasil ditambahkan ke Wishlist
        return response()->json(['status' => 200, 'message' => 'Item successfully added to wishlist']);
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
