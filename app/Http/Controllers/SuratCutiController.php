<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratCuti;
use App\Http\Requests\StoreSuratCutiRequest;
use App\Http\Requests\UpdateSuratCutiRequest;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\TemplateSK;
use App\Models\SuratKeluar;
use Barryvdh\DomPDF\Facade\Pdf;



class SuratCutiController extends Controller
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
    public function create()
    {
        return view("karyawan.SuratCuti.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'file' => 'mimes:pdf,doc,docx|max:5120',
        ]);

        $location1 = 'assets/suratCuti/';

        $suratCuti = SuratCuti::create([
            'nama_pengaju' => 'Muhammad ibnu',
            'bagian' => $request->bagian,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'keterangan' => $request->keterangan,
            'status' => "menunggu disetujui",
        ]);

        $suratCuti->tanda_tangan = 'TTD.jpeg';
        $suratCuti->save();
        $Convertpdf = PDF::loadView('karyawan.SuratCuti.templatecuti', compact('suratCuti'));
        $file_name = $request->alamat . '_' . time()  . '.pdf';
        $file_path = storage_path('../public/assets/suratCuti/') . $file_name;
        $Convertpdf->save($file_path);
        $suratCuti->file = $file_name;
        $suratCuti->save();

        Session::flash('success', 'Data surat Berhasil Ditambahkan');
        return redirect()->route('suratcuti.create')->with('success', 'surat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratCuti $suratCuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratCuti $suratCuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuratCutiRequest $request, SuratCuti $suratCuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratCuti $suratCuti)
    {
        //
    }
}
