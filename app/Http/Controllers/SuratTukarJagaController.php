<?php

namespace App\Http\Controllers;

use App\Models\SuratTukarJaga;
use App\Http\Requests\StoreSuratTukarJagaRequest;
use App\Http\Requests\UpdateSuratTukarJagaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;

class SuratTukarJagaController extends Controller
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
        return view("karyawan.SuratTukarJaga.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'mimes:pdf,doc,docx|max:5120',
        ]);

        // $location1 = 'assets/suratTukarJaga/';

        $SuratTukarJaga = SuratTukarJaga::create([
            'nama_pengaju' => 'Muhammad ibnu',
            'nama_target' => $request->nama_target,
            'tanggal_asli' => $request->tanggal_asli,
            'tanggal_dirubah' => $request->tanggal_dirubah,
            'target_tukar_jaga' => $request->target_tukar_jaga,
            'keterangan' => $request->keterangan,
            'status' => "menunggu disetujui",
        ]);

        $SuratTukarJaga->tanda_tangan = 'TTD.jpeg';
        $SuratTukarJaga->save();
        $Convertpdf = PDF::loadView('karyawan.SuratTukarJaga.templatetukarjaga', compact('suratCuti'));
        $file_name = $request->alamat . '_' . time()  . '.pdf';
        $file_path = storage_path('../public/assets/suratTukarJaga/') . $file_name;
        $Convertpdf->save($file_path);
        $SuratTukarJaga->file = $file_name;
        $SuratTukarJaga->save();

        Session::flash('success', 'Data surat Berhasil Ditambahkan');
        return redirect()->route('suratcuti.create')->with('success', 'surat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratTukarJaga $suratTukarJaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratTukarJaga $suratTukarJaga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuratTukarJagaRequest $request, SuratTukarJaga $suratTukarJaga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratTukarJaga $suratTukarJaga)
    {
        //
    }
}
