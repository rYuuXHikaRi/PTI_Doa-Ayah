<?php

namespace App\Http\Controllers\Admin;

use App\Models\Disposisi;
use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDisposisiRequest;
use App\Http\Requests\UpdateDisposisiRequest;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $surat= SuratKeluar::where('id',$id);
        return view('admin.disposisi.create',compact($id));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id,$status)
    {
        
        $surat=SuratKeluar::find($id);
        $request->validate([
            'deskripsi' => 'required|string',
        ]);
        $surat->status=$status;
        $surat->save();
  

        Disposisi::create([
            'id_surat'=> $surat->id,
            'nama_surat' => $surat->nama_surat,
            'status' => $surat->status,
            'deskripsi' => $request->input('deskripsi'),
            // Tambahkan kolom-kolom lainnya sesuai kebutuhan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('suratkeluar.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $suratkeluars = Disposisi::where('id_surat', $id)->get();
    
        return view('admin.SuratKeluar.disposisi',compact('suratkeluars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disposisi $disposisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDisposisiRequest $request, Disposisi $disposisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disposisi $disposisi)
    {
        //
    }
}
