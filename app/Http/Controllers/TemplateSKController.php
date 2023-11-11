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

    // public function store(Request $request)
    // {

    //     $templateSK = TemplateSK::create([
    //         'perihal' => $request->perihal,
    //         'hari_tanggal' => $request->hari_tanggal,
    //         'waktu' => $request->waktu,
    //         'tempat' => $request->tempat,
    //         'tanggal_surat' => $request->tanggal_surat,
    //         'pembuat_surat' => 1,
    //     ]);

    //     // Redirect ke halaman templateSK.show dengan menambahkan ID baru
    //     return redirect()->route('templateSK.show', ['id' => $templateSK->id])
    //         ->with('success', 'Data berhasil disimpan!');
    // }

    // public function template($id)
    // {
    //     $templateSK = TemplateSK::find($id);
    //     return view('admin.TemplateSK.template', compact('templateSK'));
    // }


    public function storeSKForm(Request $request,$id)
    {

        $surat = SuratKeluar::find($id);

        $templateSK = TemplateSK::create([
            'id_surat' =>$surat->id,
            'perihal' => $request->perihal,
            'hari_tanggal' => $request->hari_tanggal,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'tanggal_surat' => $request->tanggal_surat,
            'pembuat_surat' => 1,
        ]);

        // $templateSK = TemplateSK::find($id);
        $pdf = PDF::loadView('admin.TemplateSK.template', compact('templateSK'));
        $file_name = $surat->nama_surat . '.pdf';
        $file_path = storage_path('../public/assets/surat/') . $file_name;
        $pdf->save($file_path);
        // Redirect ke halaman templateSK.show dengan menambahkan ID baru
        return redirect()->route('suratkeluar.index')
            ->with('success', 'Data berhasil disimpan!');
    }

    public function showDesk()
    {
        // $templateSK = TemplateSK::find($id);
        return view('admin.TemplateSK.show');
    }
    public function storeSKnew(Request $request)
    {
        $SuratKeluar= SuratKeluar::create([
            'nama_surat' => $request->nama_surat,
            'kategori_surat' => $request->kategori_surat,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'tujuan_surat' => $request->tujuan_surat,
            'kode_surat' => $request->kode_surat,
            'pembuat_surat' => 1,
            'jenis_surat' => $request->jenis_surat,
            'file' => $request->nama_surat . '.pdf',
            'status' => "menunggu disetujui",
        ]);

        $id= $SuratKeluar->id;

        return view('admin.TemplateSK.create', compact('id'));
    }
    // public function show($id)
    // {
    //     $templateSK = TemplateSK::find($id);
    //     return view('admin.TemplateSK.show', compact('templateSK'));
    // }
    public function storeTemplate(Request $request, $id)
    {
        $templateSK = TemplateSK::find($id);
        $pdf = PDF::loadView('admin.TemplateSK.template', compact('templateSK'));
        $file_name = $request->nama_surat . '_' . uniqid() . '.pdf';
        $file_path = storage_path('../public/assets/surat/') . $file_name;
        $pdf->save($file_path);

        SuratKeluar::create([
            'nama_surat' => $request->nama_surat,
            'kategori_surat' => $request->kategori_surat,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'tujuan_surat' => $request->tujuan_surat,
            'kode_surat' => $request->kode_surat,
            'pembuat_surat' => 1,
            'jenis_surat' => $request->jenis_surat,
            'file' => $file_name,
            'status' => "menunggu disetujui",
        ]);

        // $file1->move(public_path($location1), $filename1);
        Session::flash('success', 'Data surat Berhasil Ditambahkan');
        return redirect()->route('suratkeluar.index')->with('success', 'surat berhasil ditambahkan.');
    }

    public function priview(Request $request, $id)
    {
        $templateSK = TemplateSK::where('id_surat', $id)->first();
        // $pdf = PDF::loadView('admin.TemplateSK.signature', compact('templateSK'));
        return view('admin.TemplateSK.priview', compact('templateSK'));
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
