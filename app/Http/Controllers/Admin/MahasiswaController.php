<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\mahasiswa;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename='Data Order';
        $data=Mahasiswa::all();
        return view('admin.order.index', compact('data','pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pagename='Form Input Order';
        return view('admin.order.create', compact('pagename'));
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
        // dd($request);
        $request->validate([
            'txtnama_mahasiswa'=>'required',
            'txtketerangan_mahasiswa' => 'required',
            'txtketerangan_mahasiswa1' => 'required',
            
        ]);

        $data_mahasiswa = new Mahasiswa([
            'nama_mahasiswa'=> $request -> get('txtnama_mahasiswa'),          
            'ket_mahasiswa' => $request -> get('txtketerangan_mahasiswa'),
            'status_mahasiswa' => $request -> get('txtketerangan_mahasiswa1'),

        ]);

        $data_mahasiswa->save();
        return redirect('admin\order')->with('sukses', 'berhasil di Order');
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
        
        $pagename='Update Order';
        $data=Mahasiswa::find($id);
        return view('admin.order.edit', compact('data', 'pagename'));
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
        //
        $request->validate([
            'txtnama_mahasiswa'=>'required',
            'txtketerangan_mahasiswa' => 'required',
            'txtketerangan_mahasiswa1' => 'required',
           
        ]);

        $mahasiswa=Mahasiswa::find($id);

        $mahasiswa->nama_mahasiswa = $request -> get('txtnama_mahasiswa');
        $mahasiswa->ket_mahasiswa = $request -> get('txtketerangan_mahasiswa');
        $mahasiswa->status_mahasiswa = $request -> get('txtketerangan_mahasiswa1');
        
        

        $mahasiswa->save();
        return redirect('admin\order')->with('sukses', 'Tabel Order berhasil di Simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa -> delete();
        return redirect('admin\order')->with('sukses', 'Tabel Order berhasil di hapus');
    }
}
