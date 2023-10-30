<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("admin.user.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       
   
     
        $request->validate([
            'id_roles' => 'required',
            'nama_karyawan' => 'required',
            'jabatan' => 'required',
            'nik' => 'required|unique:users,nik',
            'password' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
            'nama_bagian' => 'required',
        ]);
      
        $validatedData = $request->validate([
            
            'foto' => 'required|mimes:jpeg,png,jpg,gif|max:5120 ',
            'tanda_tangan' => 'required|mimes:jpeg,png,jpg,gif|max:5120 ',
        ]);
        $file1 = $validatedData[('foto')];
        $file2 = $validatedData[('tanda_tangan')];

        $filename1 =  $file1->getClientOriginalName();
        $filename2 = $file2->getClientOriginalName();
        // File upload location
        $location1 = '../public/assets/profil/';
        $location2 = '../public/assets/ttd/';

        // Hash password secara otomatis melalui mutator pada model User
        // Jadi, tidak perlu melakukan Hash::make secara manual di sini

        // Buat user baru dengan menggunakan model User
        $user = User::create([
            'id_roles' => $request->input('id_roles'),
            'nama_karyawan' => $request->input('nama_karyawan'),
            'jabatan' => $request->input('jabatan'),
            'nik' => $request->input('nik'),
            'password' => $request->input('password'),
            'foto' => $filename1,
            'alamat' => $request->input('alamat'),
            'nomor_hp' => $request->input('nomor_hp'),
            'tanda_tangan' =>$filename2,
            'nama_bagian' => $request->input('nama_bagian'),
     
        ]);
        $file1->move(public_path($location1), $filename1);
        $file2->move(public_path($location2), $filename2);

        // Redirect atau response sesuai kebutuhan aplikasi
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user,$id)
    {
        $user=User::where("id",$id)->first();
        return view("admin.user.update", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
