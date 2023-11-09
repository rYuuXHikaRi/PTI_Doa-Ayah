<?php

namespace App\Http\Controllers;

use App\Models\TemplateSK;
use App\Http\Requests\StoreTemplateSKRequest;
use App\Http\Requests\UpdateTemplateSKRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TemplateSKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
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
            'pembuat_surat' => $request->pembuat_surat,
        ]);

        // Redirect ke halaman templateSK.show dengan menambahkan ID baru
        return redirect()->route('templateSK.show', ['id' => $templateSK->id])
            ->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TemplateSK $templateSK)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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
