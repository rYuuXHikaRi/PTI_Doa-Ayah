<?php

namespace App\Http\Controllers;

use App\Models\SuratIzin;
use Illuminate\Http\Request;
use App\Models\TemplateSK;
use App\Models\SuratKeluar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;


class SuratIzinController extends Controller
{
    public function create()
    {
        return view("karyawan.SuratIzin.index");
    }



    public function storeSKForm(Request $request, $id)
    {
        $surat = SuratIzin::find($id);

        // $templateSK = TemplateSK::create([
        //     'id_surat' => $surat->id,
        //     'perihal' => $request->perihal,
        //     'hari_tanggal' => $request->hari_tanggal,
        //     'waktu' => $request->waktu,
        //     'tempat' => $request->tempat,
        //     'tanggal_surat' => $request->tanggal_surat,
        //     'pembuat_surat' => 1,
        // ]);

        // // $templateSK = TemplateSK::find($id);
        // $pdf = PDF::loadView('admin.TemplateSK.template', compact('templateSK'));
        // $file_name = $surat->nama_surat . '.pdf';
        // $file_path = storage_path('../public/assets/surat/') . $file_name;
        // $pdf->save($file_path);
        // // Redirect ke halaman templateSK.show dengan menambahkan ID baru
        // return redirect()->route('suratkeluar.index')
        //     ->with('success', 'Data berhasil disimpan!');
    }

    public function showDesk()
    {
        // $templateSK = TemplateSK::find($id);
        return view('admin.TemplateSK.show');
    }
    public function storeSKnew(Request $request)
    {
        // $SuratKeluar = SuratKeluar::create([
        //     'nama_surat' => $request->nama_surat,
        //     'kategori_surat' => $request->kategori_surat,
        //     'tanggal_dibuat' => $request->tanggal_dibuat,
        //     'tujuan_surat' => $request->tujuan_surat,
        //     'kode_surat' => $request->kode_surat,
        //     'pembuat_surat' => 1,
        //     'jenis_surat' => $request->jenis_surat,
        //     'file' => $request->nama_surat . '.pdf',
        //     'status' => "menunggu disetujui",
        // ]);

        // $id = $SuratKeluar->id;

        // return view('admin.TemplateSK.create', compact('id'));
    }
    public function priview(Request $request, $id)
    {
        // $templateSK = TemplateSK::where('id_surat', $id)->first();
        // // $pdf = PDF::loadView('admin.TemplateSK.signature', compact('templateSK'));
        // return view('admin.TemplateSK.priview', compact('templateSK'));
    }
    public function Sign($id)
    {
    //     $templateSK = TemplateSK::where('id', $id)->first();
    //     $templateSK->tanda_tangan = 'TTD.jpg';
    //     $templateSK->save();


    //     $surat = SuratKeluar::where('id', $templateSK->id_surat)->first();

    //     $pdf = PDF::loadView('admin.TemplateSK.signature', compact('templateSK'));
    //     $file_name = $surat -> file;
    //     $file_path = storage_path('../public/assets/surat/') . $file_name;
    //     // $pdf->save($file_path);

    //     $FileToDelete = public_path('../public/assets/surat/') . $surat->file;

    //     if (File::exists($FileToDelete)){
    //         File::delete($FileToDelete);
    //         $pdf->save($file_path);
    //     }
    //     else{
    //         $pdf->save($file_path);
    //         // return 'Filer not found';
    //     }

    //         // Redirect ke halaman templateSK.show dengan menambahkan ID baru
    //         return redirect()->route('suratkeluar.index')
    //             ->with('success', 'Data berhasil disimpan!');
    // }

    }
}
