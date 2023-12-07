<?php

namespace App\Http\Controllers;

use App\Models\SuratTukarJaga;
use App\Models\Disposisi;
use App\Http\Requests\StoreSuratTukarJagaRequest;
use App\Http\Requests\UpdateSuratTukarJagaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;


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

        $suratTukarJaga = SuratTukarJaga::create([
            'nama_pengaju' => auth()->user()->nama_karyawan,
            'nama_target' => $request->nama_target,
            'jadwal_asli' => $request->jadwal_asli,
            'jadwal_dirubah' => $request->jadwal_dirubah,
            'target_tukar_jaga' => $request->target_tukar_jaga,
            'keterangan' => $request->keterangan,
            'tanda_tangan'=>auth()->user()->tanda_tangan,
            'status' => "Kepala Bagian",
        ]);

      
        $suratTukarJaga->nama_surat ="Surat Tukar Jaga ".auth()->user()->nama_karyawan.$suratTukarJaga->id;

        $suratTukarJaga->save();
        $Convertpdf = PDF::loadView('karyawan.SuratTukarJaga.templatetukarjaga', compact('suratTukarJaga'));
        $file_name = $suratTukarJaga->nama_surat . '.pdf';
        $file_path = storage_path('../public/assets/SuratTukarJaga/') . $file_name;
        $Convertpdf->save($file_path);
        $suratTukarJaga->file = $file_name;
        $suratTukarJaga->save();

        Disposisi::create([
            'id_surat'=> $suratTukarJaga->id,
            'nama_surat' => $suratTukarJaga->nama_surat,
            'status' => $suratTukarJaga->status,
            'deskripsi' => "Surat Telah diajukan oleh ".$suratTukarJaga->nama_pengaju,
            // Tambahkan kolom-kolom lainnya sesuai kebutuhan
        ]);

        Session::flash('success', 'Data surat Berhasil Ditambahkan');
        return redirect()->route('surattukarjaga.create')->with('success', 'surat berhasil ditambahkan.');
    }

    public function priview(Request $request, $id)
    {
        $suratTukarJaga = SuratTukarJaga::where('id', $id)->first();
        return view('admin.DaftarPermohonanTukarJaga.priview', compact('suratTukarJaga'));
    }
    public function Sign($id,$jenis)
    {

        $suratTukarJaga = SuratTukarJaga::where('id', $id)->first();
        if($jenis == 'Kepala Ruangan'){
            $suratTukarJaga->kepala_ruangan = auth()->user()->tanda_tangan;
            $suratTukarJaga->status= 'Kepala Bagian';
        }
        else if($jenis == 'Kepala Bagian'){
            $suratTukarJaga->kepala_bagian = auth()->user()->tanda_tangan;
            $suratTukarJaga->status= 'disetujui';
        }
        else if($jenis == 'Termohon'){
            $suratTukarJaga->termohon = auth()->user()->tanda_tangan;
            $suratTukarJaga->status= 'Kepala Ruangan';
        }
        $suratTukarJaga->save();

        $pdf = PDF::loadView('admin.DaftarPermohonanTukarJaga.signature', compact('suratTukarJaga'));
        $file_name = $suratTukarJaga->file;
        $file_path = storage_path('../public/assets/SuratTukarJaga/') . $file_name;

        $FileToDelete = public_path('../public/assets/SuratTukarJaga/') . $suratTukarJaga->file;

        if (File::exists($FileToDelete)) {
            File::delete($FileToDelete);
            $pdf->save($file_path);
        } else {
            $pdf->save($file_path);
            // return 'Filer not found';
        }

        Disposisi::create([
            'id_surat'=> $suratTukarJaga->id,
            'nama_surat' => $suratTukarJaga->nama_surat,
            'status' => $suratTukarJaga->status,
            'deskripsi' => "Surat Telah disetujui ".$suratTukarJaga->status,
            // Tambahkan kolom-kolom lainnya sesuai kebutuhan
        ]);
        // Redirect ke halaman SuratCuti.show dengan menambahkan ID baru
        return redirect()->route('DaftarPermohonan.indexTukarJaga')
            ->with('success', 'Data berhasil disimpan!');
    }
   
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
