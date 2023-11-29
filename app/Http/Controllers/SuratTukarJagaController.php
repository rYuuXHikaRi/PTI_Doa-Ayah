<?php

namespace App\Http\Controllers;

use App\Models\SuratTukarJaga;
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
        return view("Admin.ListPermohonanSurat.create");
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
            'nama_pengaju' => 'Muhammad ibnu',
            'nama_target' => $request->nama_target,
            'jadwal_asli' => $request->jadwal_asli,
            'jadwal_dirubah' => $request->jadwal_dirubah,
            'target_tukar_jaga' => $request->target_tukar_jaga,
            'keterangan' => $request->keterangan,
            'status' => "menunggu disetujui",
        ]);

        $suratTukarJaga->tanda_tangan = 'TTD.jpeg';
        $suratTukarJaga->save();
        $Convertpdf = PDF::loadView('karyawan.SuratTukarJaga.templatetukarjaga', compact('suratTukarJaga'));
        $file_name = $request->alamat . '_' . time()  . '.pdf';
        $file_path = storage_path('../public/assets/suratTukarJaga/') . $file_name;
        $Convertpdf->save($file_path);
        $suratTukarJaga->file = $file_name;
        $suratTukarJaga->save();

        Session::flash('success', 'Data surat Berhasil Ditambahkan');
        return redirect()->route('surattukarjaga.create')->with('success', 'surat berhasil ditambahkan.');
    }

    public function priview(Request $request, $id)
    {
        $suratTukarJaga = SuratTukarJaga::where('id', $id)->first();
        return view('admin.DaftarPermohonanTukarJaga.priview', compact('suratTukarJaga'));
    }
    public function Sign($id)
    {
        $suratTukarJaga = SuratTukarJaga::where('id', $id)->first();
        $suratTukarJaga->kepala_bagian = 'TTD.jpg';
        $suratTukarJaga->kepala_ruangan = 'TTD.jpg';
        $suratTukarJaga->target_tukar_jaga = 'TTD.jpg';
        $suratTukarJaga->save();
        $pdf = PDF::loadView('admin.DaftarPermohonanTukarJaga.signature', compact('suratTukarJaga'));
        $file_name = $suratTukarJaga->file;
        $file_path = storage_path('../public/assets/surat/') . $file_name;

        $FileToDelete = public_path('../public/assets/surat/') . $suratTukarJaga->file;

        if (File::exists($FileToDelete)) {
            File::delete($FileToDelete);
            $pdf->save($file_path);
        } else {
            $pdf->save($file_path);
            // return 'Filer not found';
        }
        // Redirect ke halaman SuratCuti.show dengan menambahkan ID baru
        return redirect()->route('DaftarPermohonan.indexTukarJaga')
            ->with('success', 'Data berhasil disimpan!');
    }
    public function downloadSuratTukarJaga(Request $request, $id, $file)
    {
        $suratTukarJaga = SuratTukarJaga::find($id);
        if (!$suratTukarJaga) {
            abort(404);
        }
        $file_path = storage_path('../public/assets/surat/') . $suratTukarJaga->file;

        // Tentukan nama file yang akan di-download
        $file = $suratTukarJaga->file;
        $extension = pathinfo($file_path, PATHINFO_EXTENSION);

        $mime_types = [
            'pdf' => 'application/pdf',
            'doc' => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ];
        $mime_type = $mime_types[$extension] ?? 'application/octet-stream';
        return response()->download($file_path, $file, ['Content-Type' => $mime_type]);
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
