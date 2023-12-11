<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class ProfileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user=User::find($id);
        return view('admin.Profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }
    public function EditPassword()
    {
        return view('admin.Profile.editPassword');
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = auth()->user();

        // Cek jika password lama sesuai
        if (!Hash::check($request->current_password, $user->password)) {
            Session::flash('error', 'Password lama tidak cocok');
            return redirect()->route('profile.EditPassword')->with('error', 'Password lama tidak cocok');
        }

        // Cek jika password lama sama dengan password baru
        if (Hash::check($request->new_password, $user->password)) {
            Session::flash('error', 'Password baru tidak boleh sama dengan password lama');
            return redirect()->route('profile.EditPassword')->with('error', 'Password baru tidak boleh sama dengan password lama');
        }
        // Update password
        // $user->update([
        //     'password' => Hash::make($request->new_password),
        // ]);
        // $passwordBaru = $user-> password = hash::make($request->new_password);
        $passwordBaru = $user-> password = $request->new_password;
        $user->password = $passwordBaru;
        $user->save();

        Session::flash('success', 'Password berhasil diubah');
        return redirect()->route('profile.user')->with('success', 'profile berhasil diupdate.');
    }
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function updatePassword($newPassword)
    // {
    //     $this->password = $newPassword;
    //     $this->save();
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'role' => 'required',
            'nama_karyawan' => 'required',
            // 'jabatan' => 'required',
            // 'nik' => 'required|unique:users,nik,'.$id,
            'alamat' => 'required',
            'nomor_hp' => 'required',
            // 'nama_bagian' => 'required',
        ]);

        $validatedData = $request->validate([
            'foto' => 'nullable|mimes:jpeg,png,jpg,gif|max:5120',
            'tanda_tangan' => 'nullable|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $user = auth()->user();

        if (!$user) {
            return redirect()->route('profile.user')->with('error', 'User not found.');
        }

        // Update existing user data
        // $user->id_roles = $request->input('id_roles');
        $user->nama_karyawan = $request->input('nama_karyawan');
        // $user->jabatan = $request->input('jabatan');
        // $user->nik = $request->input('nik');
        $user->alamat = $request->input('alamat');
        $user->nomor_hp = $request->input('nomor_hp');
        // $user->nama_bagian = $request->input('nama_bagian');

        // Update foto if provided
        if ($request->hasFile('foto')) {
            $file1 = $validatedData['foto'];
            $filename1 = $file1->getClientOriginalName();
            $location1 = '../public/assets/profil/';

            // Move the new photo to the destination
            $file1->move(public_path($location1), $filename1);

            // Delete the old photo if it exists
            if ($user->foto) {
                unlink(public_path($location1 . $user->foto));
            }

            // Update the user's foto attribute
            $user->foto = $filename1;
        }

        // Update tanda_tangan if provided
        if ($request->hasFile('tanda_tangan')) {
            $file2 = $validatedData['tanda_tangan'];
            $filename2 = $file2->getClientOriginalName();
            $location2 = '../public/assets/ttd/';

            // Move the new tanda_tangan to the destination
            $file2->move(public_path($location2), $filename2);

            // Delete the old tanda_tangan if it exists
            if ($user->tanda_tangan) {
                unlink(public_path($location2 . $user->tanda_tangan));
            }

            // Update the user's tanda_tangan attribute
            $user->tanda_tangan = $filename2;
        }

        // Save the updated user
        $user->save();
        Session::flash('success', 'Profile Berhasil Diubah');
        return redirect()->route('profile.user')->with('success', 'profile berhasil diupdate.');
    }
}
