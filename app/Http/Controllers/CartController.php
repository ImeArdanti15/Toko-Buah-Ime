<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cartItems = Cart::instance('cart_' . $user->id)->content();
        $images = [];

        foreach ($cartItems as $item) {
            $product = Products::find($item->id);
            $images[] = $product->image1;
        }

        return view('cart.index', [
            'cartItems' => $cartItems,
            'images' => $images
        ]);
    }

    public function add(Request $request, $id)
    {
        $user = Auth::user();
        $product = Products::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        Cart::instance('cart_' . $user->id)->add($id, $product->product_name, 1, $product->price,
        [
            'user_id' => $user->id,
            'image' => $product->image1]
        )->associate('App\Models\Products');

        return redirect()->route('cart.index')->with('success', 'Product added to cart.');
    }

    public function destroy()
    {
        $this->session->remove($this->instance);
    }

    public function update(Request $request)
    {
        $rowId = $request->input('rowId');
        $quantity = $request->input('quantity');

        try {
            // Verify if the item exists in the cart
            $item = Cart::get($rowId);
            if (!$item) {
                return response()->json([
                    'success' => false,
                    'message' => 'Item not found in cart.'
                ]);
            }

            Cart::update($rowId, $quantity); // Update the item quantity

            // Get the updated item
            $item = Cart::get($rowId);
            $subtotal = $item->subtotal();
            $total = Cart::total();

            return response()->json([
                'success' => true,
                'subtotal' => $subtotal,
                'total' => $total
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function get($rowId)
    {
        $content = $this->getContent();

        if ( ! $content->has($rowId))
            throw new InvalidRowIDException("The cart does not contain rowId {$rowId}.");

        return $content->get($rowId);
    }
}
