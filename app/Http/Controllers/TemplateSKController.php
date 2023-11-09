<?php

namespace App\Http\Controllers;

use App\Models\TemplateSK;
use App\Models\SuratKeluar;
use App\Http\Requests\StoreTemplateSKRequest;
use App\Http\Requests\UpdateTemplateSKRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;



class TemplateSKController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view("admin.TemplateSK.create");
    }

    public function store(Request $request)
    {
        $templateSK = TemplateSK::create([
            'perihal' => $request->perihal,
            'hari_tanggal' => $request->hari_tanggal,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'tanggal_surat' => $request->tanggal_surat,
            'pembuat_surat' => 1,
        ]);

        // Redirect ke halaman templateSK.show dengan menambahkan ID baru
        return redirect()->route('templateSK.show', ['id' => $templateSK->id])
            ->with('success', 'Data berhasil disimpan!');
    }
    public function template($id)
    {
        $templateSK = TemplateSK::find($id);
        return view('admin.TemplateSK.template', compact('templateSK'));
    }

    public function show($id)
    {
        $templateSK = TemplateSK::find($id);
        return view('admin.TemplateSK.show', compact('templateSK'));
    }
    public function storeTemplate(Request $request ,$id)
    {
        $templateSK = TemplateSK::find($id);
        $pdf = PDF::loadView('admin.TemplateSK.template', compact('templateSK'));

        // Simpan PDF ke direktori public/assets/surat dengan nama file yang unik
        // $filePath = public_path('assets/surat/' . uniqid() . '_preview_surat.pdf');
        $file_path = storage_path('../public/assets/SuratTemplate/') .  uniqid() . '_preview_surat.pdf';
        $pdf->save($file_path);

        // Tampilkan pratinjau PDF
        $file1 = $pdf->download('preview_surat.pdf');

        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:5120',
        ]);

        $file1 = $validatedData['file'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/surat/';

        SuratKeluar::create([
            'nama_surat' => $request->nama_surat,
            'kategori_surat' => $request->kategori_surat,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'tujuan_surat' => $request->tujuan_surat,
            'kode_surat' => $request->kode_surat,
            'pembuat_surat' => 1,
            'jenis_surat' => $request->jenis_surat,
            'file' => $filename1,
        ]);
        dd($file1);
        $file1->move(public_path($location1), $filename1);
        Session::flash('success', 'Data surat Berhasil Ditambahkan');
        return redirect()->route('suratkeluar.index')->with('success', 'surat berhasil ditambahkan.');
    }

    public function SavePDF(Request $request, $id)
    {
        $templateSK = TemplateSK::find($id);
        $pdf = PDF::loadView('admin.TemplateSK.show', compact('templateSK'));

        // Simpan PDF ke direktori public/assets/surat dengan nama file yang unik
        // $filePath = public_path('assets/surat/' . uniqid() . '_preview_surat.pdf');
        $file_path = storage_path('../public/assets/SuratTemplate/') .  uniqid() . '_preview_surat.pdf';
        $pdf->save($file_path);

        // Tampilkan pratinjau PDF
        return $pdf->download('preview_surat.pdf');
    }
    public function edit(TemplateSK $templateSK)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemplateSKRequest $request, TemplateSK $templateSK)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TemplateSK $templateSK)
    {
        //
    }
}
