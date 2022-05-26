<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtItem = Item::orderBy('id','DESC')->get();

        return view('item.data_master', compact('dtItem'));

       // return view('data_master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create_master');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Item::Create([
            'kode_item' => $request->kode_item,
            'nama_item' => $request->nama_item,
            'jenis_item' => $request->jenis_item,
            'stok_item' => $request->stok_item,
            'satuan' => $request->satuan,
            'kondisi' => $request->kondisi,

        ]);

        return redirect('data_master')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Item:: findorfail($id);
        return view('item.edit_master', compact('a'));
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
        $a = Item:: findorfail($id);
        $a->update($request->all());
        return redirect('data_master')->with('toast_success', 'Data Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Item:: findorfail($id);
        $b->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
