<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Http\Requests\StoreSuratKeluarRequest;
use App\Http\Requests\UpdateSuratKeluarRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use PDF;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratkeluar = SuratKeluar::all();
        return view("admin.SuratKeluar.index", compact("suratkeluar"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $suratKeluar = SuratKeluar::all();
        return view("admin.SuratKeluar.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:5120',
        ]);

        $file1 = $validatedData['file'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/file/';

        SuratKeluar::create([
            'nama_surat' => $request->nama_surat,
            'kode_surat' => $request->kode_surat,
            'perihal' => $request->perihal,
            'lokasi_surat' => $request->lokasi_surat,
            'kategori' => $request->kategori,
            'tanggal_selesai' => $request->tanggal_selesai,
            'file' => $filename1,
        ]);

        $title = "Tambah surat";

        $file1->move(public_path($location1), $filename1);
        $surats = SuratKeluar::all();
        Session::flash('success', 'Data surat Berhasil Ditambahkan');
        return redirect()->route('surat.index')->with('success', 'surat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuratKeluarRequest $request, SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = SuratKeluar::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Surat Berhasil Dihapus');
        return redirect()->back();
    }
    public function Cetak(Request $request, $id){
        $data = SuratKeluar::where('id', $id)->first();
        // $filepdf = $suratkeluar ->$file;
        // $pdf = SuratKeluar::loadView('cetak_surat',['file' => $SuratKeluar ->$file ]);
        // return $pdf->stream('cetak_surat.pdf');
    }
}
