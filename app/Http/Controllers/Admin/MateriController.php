<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bab;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($alias)
    {
        $bab = Bab::where('alias', $alias)->first();

        $listMateri = Materi::where('bab_id', $bab->bab_id)->get();

        return view("admin.materi.$alias.tabel", [
            'bab' => $bab,
            'listMateri' => $listMateri
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($alias)
    {
        $bab = Bab::where('alias', $alias)->first();

        return view("admin.materi.$alias.nambah", [
            'bab' => $bab
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $alias)
    {
        $bab = Bab::where('alias', $alias)->first();
        $data = $request->all();
        $data['bab_id'] = $bab->bab_id;

        foreach ($request->files as $name => $input) {
            $file = $request->file($name);
            $folder = "uploads/bab/$alias/materi";
            $filepath = $file->store($folder, 'public');
            $data[$name] = $filepath;
        }

        Materi::create($data);

        return redirect()->to("admin/materi/$alias")->with('success', 1);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $alias, string $materi_id)
    {
        $bab = Bab::where('alias', $alias)->first();
        $materi = Materi::where('materi_id', $materi_id)->first();

        return view("admin.materi.$alias.ngowah", [
            'bab' => $bab,
            'materi' => $materi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $alias, string $materi_id)
    {
        $data = $request->all();
        unset($data['_token']);
        $materi = Materi::where('materi_id', $materi_id)->first();

        foreach ($request->files as $name => $input) {
            Storage::delete('public/' . $materi[$name]);
            $file = $request->file($name);
            $folder = "uploads/bab/$alias/materi";
            $filepath = $file->store($folder, 'public');
            $data[$name] = $filepath;
        }

        Materi::where('materi_id', $materi_id)->update($data);

        return redirect()->to("admin/materi/$alias")->with('success', 1);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $alias, string $materi_id)
    {
        $materi = Materi::where('materi_id', $materi_id)->delete();

        return redirect()->to("admin/materi/$alias")->with('successHapus', 1);
    }
}
