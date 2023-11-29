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
use Illuminate\Support\Facades\File;




class SuratCutiController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        return view("karyawan.SuratCuti.create");
    }
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

    public function priview(Request $request, $id)
    {
        $suratCuti = SuratCuti::where('id', $id)->first();
        // $pdf = PDF::loadView('admin.TemplateSK.signature', compact('templateSK'));
        return view('admin.DaftarPermohonanCuti.priviewCuti', compact('suratCuti'));
    }
    public function Sign($id)
    {
        $suratCuti = SuratCuti::where('id', $id)->first();
        $suratCuti->kepala_bagian = 'TTD.jpg';
        $suratCuti->save();

        $pdf = PDF::loadView('admin.DaftarPermohonanCuti.signature', compact('suratCuti'));
        $file_name = $suratCuti->file;
        $file_path = storage_path('../public/assets/surat/') . $file_name;

        $FileToDelete = public_path('../public/assets/surat/') . $suratCuti->file;

        if (File::exists($FileToDelete)) {
            File::delete($FileToDelete);
            $pdf->save($file_path);
        } else {
            $pdf->save($file_path);
            // return 'Filer not found';
        }
        // Redirect ke halaman SuratCuti.show dengan menambahkan ID baru
        return redirect()->route('DaftarPermohonan.indexCuti')
            ->with('success', 'Data berhasil disimpan!');
    }
    public function downloadSuratCuti(Request $request, $id, $file)
    {
        $suratCuti = SuratCuti::find($id);
        if (!$suratCuti) {
            abort(404);
        }
        $file_path = storage_path('../public/assets/surat/') . $suratCuti->file;

        // Tentukan nama file yang akan di-download
        $file = $suratCuti->file;
        $extension = pathinfo($file_path, PATHINFO_EXTENSION);

        $mime_types = [
            'pdf' => 'application/pdf',
            'doc' => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ];
        $mime_type = $mime_types[$extension] ?? 'application/octet-stream';
        return response()->download($file_path, $file, ['Content-Type' => $mime_type]);
    }
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
