<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSuratMasukRequest;
use App\Http\Requests\UpdateSuratMasukRequest;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = SuratMasuk::all();
        return view("admin.suratmasuk.index", compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.suratmasuk.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_surat' => 'required',
            'kategori' => 'required',
            'perihal' => 'required',
            'tanggal_dibuat' => 'required|date',
            'asal_surat' => 'required',
            'file' => 'required|mimes:pdf|max:2048', // Batasan tipe file dan ukuran file (maksimal 2MB)
        ]);
       
        // Simpan data surat beserta file
        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $file->move(public_path('files'), $nama_file);

        $surat = SuratMasuk::create([
            'nama_surat' => $request->nama_surat,
            'kategori' => $request->kategori,
            'perihal' => $request->perihal,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'asal_surat' => $request->asal_surat,
            'file' => $nama_file,
        ]);

        return redirect()->route('suratmasuk.index')->with('success', 'Surat berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratMasuk $suratMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $surat= SuratMasuk::find($id);
        return view('admin.suratmasuk.update', compact('surat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_surat' => 'required',
            'kategori' => 'required',
            'perihal' => 'required',
            'tanggal_dibuat' => 'required|date',
            'asal_surat' => 'required' // Batasan tipe file dan ukuran file (maksimal 2MB)
        ]);

        $surat = SuratMasuk::findOrFail($id);

        // Update data surat
        $surat->nama_surat = $request->nama_surat;
        $surat->kategori = $request->kategori;
        $surat->perihal = $request->perihal;
        $surat->tanggal_dibuat = $request->tanggal_dibuat;
        $surat->asal_surat = $request->asal_surat;
      

        // Jika ada file yang diunggah, proses dan simpan
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $nama_file = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files'), $nama_file);

            // Hapus file lama jika ada
            if (file_exists(public_path('files/' . $surat->file))) {
                unlink(public_path('files/' . $surat->file));
            }

            $surat->file = $nama_file;
        }

        $surat->save();

        return redirect()->route('surat.index')->with('success', 'Surat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratMasuk $suratMasuk)
    {
        //
    }
}
