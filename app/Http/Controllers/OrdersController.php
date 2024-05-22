<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request; 


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('dashboard.pesanan.index', [
            'orders' => Orders::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $data = $request->only([
                'customer_id',
                'order_date',
                'total_amount',
                'atatus'
            ]);
            Orders::create($data);
            return view('dashboard.pesanan.index', [
                'status' => 'simpan',
                'pesan' => 'Pesanan Baru dengan Nama "'. $request->name . '" Berhasil Ditambahkan !',
                'pesanan' => Orders::all()
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
