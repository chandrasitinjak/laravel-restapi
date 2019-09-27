<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

use Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function detail_barang($id) {
        $data = Barang::find($id);

        return response()->json($data);
     }
     

    public function update(Request $request, $id)
    {
        $data = Barang::find($id);

        $data->name = $request->name;
        $data->desc = $request->desc;

        $data->update();

        return "sukses !!!";
    }

    public function getAllData() {
        $data = Barang::all();

        return response()->json($data);
    }

    public function index()
    {
        
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
        $barang = new Barang();

        $barang->name = $request->name;
        $barang->desc = $request->desc;
        
        $barang->save();
        return "sukses menambahkan";        
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang::find($id);

        $data->delete();

        return "sukses menghapus data";
    }
}
