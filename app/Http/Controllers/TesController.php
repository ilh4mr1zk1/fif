<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentFif;

class TesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = PaymentFif::all();

        return view('index', ['data_transaksi' => $data ]);
    }

    public function tes()
    {
        echo "ok";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('create');
    }

    public function simpan(Request $request)
    {   
        // upload foto/gambar
        $file = Request()->foto;
        $fileName = Request()->nama . '.' . $file->extension();
        $file->move(public_path('foto'), $fileName);

        $add = new PaymentFif;   // valible and model name
        $add->nama = $request->input('nama');
        $add->nomer_kontrak = $request->input('nomer_kontrak');
        $add->bayar = $request->input('bayar');
        $add->via = $request->input('via');
        $add->foto = $fileName;
       
        $add->save();

        return redirect()->route('firstPage')->with('berhasil', 'Payment Successfully Added !!!');

    }

    public function detail($id)
    {

        $data = PaymentFif::find($id);

        return view('detail', ['datas' => $data] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PaymentFif::find($id);
        return view('edit', ['ambil_data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ambilData = PaymentFif::find($id);
        $ambilData->update($request->all());
        return redirect('/dashboard')->with('berhasil', 'Payment successfully updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ambilData = PaymentFif::find($id);
        $ambilData->delete();
        return redirect('/dashboard')->with('berhasil', 'Payment successfully deleted !!!');
    }
}
