<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Http\Requests\StoreArsipRequest;
use App\Http\Requests\DestroyArsipRequest;
use App\Http\Requests\UpdateArsipRequest;
use App\Http\Resources\ArsipResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

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
    public function store(StoreArsipRequest $request)
    {
        // Log::info('Received POST data:', $request->all());
        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:5120',
        ]);

        Arsip::create([
            'nama_arsip' => $request->nama_arsip,
            'kode_arsip' => $request->kode_arsip,
            'perihal' =>  $request->perihal,
            'lokasi_arsip' => $request->lokasi_arsip,
            'kategori' => $request->kategori,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'tanggal_selesai' => $request->tanggal_selesai,
            'file' => $request->file,
        ]);

        // $file->move(public_path($location), $filename);
        Session::flash('success', 'Data User Berhasil Ditambahkan');
        return view('admin.arsip.create');
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

    public function update(UpdateArsipRequest $request, Arsip $arsip)
    {
        //
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
