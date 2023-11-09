<?php

namespace App\Http\Controllers;

use App\Models\TemplateSK;
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

    public function show($id)
    {
        $templateSK = TemplateSK::find($id);
        return view('admin.TemplateSK.show', compact('templateSK'));
    }
    // public function SaveTemplate($id)
    // {
    //     $templateSK = TemplateSK::find($id);

    //     // Menampilkan data pada halaman templateSK.show
    //     return view('admin.TemplateSK.show', compact('templateSK'));
    // }

    public function SavePDF(Request $request, $id)
    {
        $templateSK = TemplateSK::find($id);
        $pdf = PDF::loadView('admin.TemplateSK.show', compact('templateSK'));

        // Simpan PDF ke direktori public/assets/surat dengan nama file yang unik
        $filePath = public_path('assets/surat/' . uniqid() . '_preview_surat.pdf');
        $pdf->save($filePath);

        // Tampilkan pratinjau PDF
        return $pdf->stream('preview_surat.pdf');
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
