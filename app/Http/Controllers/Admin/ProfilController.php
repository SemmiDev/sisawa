<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Auth::getUser();

        return view("admin.profil.tampil", ['guru' => $guru]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $guru = Auth::getUser();

        return view("admin.profil.ngowah", [
            'guru' => $guru,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        Guru::where('id', Auth::id())->update($validated);

        return redirect()->to("admin/profil")->with('success', 1);
    }
}
