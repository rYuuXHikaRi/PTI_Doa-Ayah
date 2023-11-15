<?php

namespace App\Http\Controllers;

use App\Models\SuratIzin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\TemplateSK;
use App\Models\SuratKeluar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;


class SuratIzinController extends Controller
{
    public function index()
    {
        return view("karyawan.SuratIzin.index");
    }
    public function create()
    {
        return view("karyawan.SuratIzin.create");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:5120',
            'bukti' => 'required|mimes:pdf,doc,docx|max:5120',
        ]);

        $file1 = $validatedData['file'];
        $file2 = $validatedData['bukti'];
        $filename1 = $file1->getClientOriginalName();
        $filename2 = $file2->getClientOriginalName();
        $location1 = 'assets/surat/';
        $location1 = 'assets/bukti/';

        $suratIzin = SuratIzin::create([
            'nama_pengaju' => 1,
            'kategori_surat' => $request->kategori_surat,
            'tanggal_mulai' => $request->tanggal_mulai, // Pastikan Anda memiliki atribut tanggal_mulai
            'tanggal_selesai' => $request->tanggal_selesai, // Pastikan Anda memiliki atribut tanggal_selesai
            'kode_surat' => $request->kode_surat,
            'keterangan' => $request->keterangan,
            'bukti' => $filename2,
            'status' => "menunggu disetujui",
            'file' => $filename1,
        ]);

        if ($request->tanggal_mulai && $request->tanggal_selesai) {
            // Konversi tanggal_mulai dan tanggal_selesai ke objek Carbon
            $tanggalMulai = Carbon::parse($request->tanggal_mulai);
            $tanggalSelesai = Carbon::parse($request->tanggal_selesai);

            // Hitung durasi antara dua tanggal
            $durasi = $tanggalMulai->diffInDays($tanggalSelesai);

            // Atur nilai durasi dan simpan objek SuratIzin
            $suratIzin->durasi = $durasi;
            $suratIzin->save();
        }

        $file1->move(public_path($location1), $filename1);
        Session::flash('success', 'Data surat Berhasil Ditambahkan');
        return redirect()->route('suratizin.index')->with('success', 'surat berhasil ditambahkan.');
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
