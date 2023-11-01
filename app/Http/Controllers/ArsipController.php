<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Http\Requests\StoreArsipRequest;
use App\Http\Requests\UpdateArsipRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
        $arsips = Arsip::all();
        $title = "Arsip";
        return view("admin.arsip.index", compact(["arsips", "title"]));
    }
    public function create()
    {
        $title = "Tambah Arsip";
        return view("admin.arsip.create", compact(["title"]));
    }
    public function store(Request $request)
    {
        // Log::info('Received POST data:', $request->all());
        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:5120',
        ]);
        $file1 = $validatedData[('file')];
        $filename1 =  $file1->getClientOriginalName();


        // File upload location
        $location1 = '../public/assets/file/';

        Arsip::create([
            'nama_arsip' => $request->nama_arsip,
            'kode_arsip' => $request->kode_arsip,
            'perihal' =>  $request->perihal,
            'lokasi_arsip' => $request->lokasi_arsip,
            'kategori' => $request->kategori,
            'tanggal_terbit' => $request->tanggal_terbit,
            'tanggal_selesai' => $request->tanggal_selesai,
            'file' => $request->file,
        ]);
        $title = "Tambah Arsip";
        $file1->move(public_path($location1), $filename1);

        // $file->move(public_path($location), $filename);
        Session::flash('success', 'Data User Berhasil Ditambahkan');
        return view('admin.arsip.create', compact(["title"]));
    }


    public function show(Arsip $arsip)
    {
        //
    }


    public function edit($id)
    {
        $title = "Edit Arsip";
        $arsip = Arsip::where('id', $id)->first();
        return view('admin.arsip.edit', compact(['title','arsip']));

    }

    public function update(Request $request, $id)
    {
        $arsip = Arsip::where('id', $id)->first();
        // dd($arsip);
        $arsip->nama_arsip = $request->input('nama_arsip');
        $arsip->kode_arsip = $request->input('kode_arsip');
        $arsip->perihal = $request->input('perihal');
        $arsip->lokasi_arsip = $request->input('lokasi_arsip');
        $arsip->kategori = $request->input('kategori');
        $arsip->tanggal_terbit = $request->input('tanggal_terbit');
        $arsip->tanggal_selesai = $request->input('tanggal_selesai');
        $arsip->file = $request->input('file');

        if ($request->hasFile('file')) {
            $validatedData = $request->validate([
                'file' => 'required|mimes:pdf,doc,docx|max:5120',
            ]);
            $file = $validatedData[('file')];
            $filename =  $file->getClientOriginalName();
            // File upload location
            $location = '../public/assets/file/';
            $file->move(public_path($location), $filename);
            $arsip->NamaFile = $filename;
        }
        $arsip->save();
        $title = "Edit Arsip";
        Session::flash('success', 'Data Arsip Berhasil DiUbah');
        $arsips=Arsip::all();
        return view('admin.arsip.edit',compact(['arsips','title']));
        // return redirect()->route('arsip.index')->with('success', 'User berhasil diupdate.');

    }

    public function destroy($id)
    {
        $data = Arsip::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Data Arsip Berhasil Dihapus');

        // $title = "Arsip";
        $arsips=Arsip::all();
        // return view('admin.arsip.index',compact(['arsips','title']));
        return redirect()->back();

    }

}
