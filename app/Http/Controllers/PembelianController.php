<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pembelian = pembelian::all();

        return view('pembelian.index', compact('pembelian'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'barang_id' => 'required'
        ]);
        $pembelian = pembelian::create($request->all());
        return redirect ('pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembelian = Pembelian::find($id);
        return view ('pembelian.form', compact ('pembelian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'jumlah' => 'required|max:255',
            'harga' => 'required|max:255',
            'barang_id' => 'required'
        ]);
        $suplier->update([
            'nama' => $request -> nama,
            'jumlah' => $request -> jumlah,
            'harga' => $request -> harga,
            'barang_id' => $request -> barang_id
        ]);
        return redirect('pembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->delete();
        return redirect('pembelian');
    }
}
