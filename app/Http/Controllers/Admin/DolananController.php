<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Bab;
use App\Models\BabDolanan;
use App\Models\Dolanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DolananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($alias)
    {
        $bab = Bab::where('alias', $alias)->first();

        $listDolanan = BabDolanan::where('bab_id', $bab->bab_id)
            ->with(['dolanan'])
            ->get();

        return view("admin.dolanan.pilihanDolanan", [
            'bab' => $bab,
            'listDolanan' => $listDolanan
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function tabel($alias, $dolanan_id)
    {
        $bab = Bab::where('alias', $alias)->first();
        $dolanan = Dolanan::where('dolanan_id', $dolanan_id)->first();
        $namaTabel = $dolanan->detail;
        $detail = Helper::getModel($namaTabel);
        $listDetail = $detail->where('bab_id', $bab->bab_id)->get();

        return view("admin.dolanan.$namaTabel.tabel", [
            'bab' => $bab,
            'dolanan' => $dolanan,
            'listDetail' => $listDetail
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $alias, string $dolanan_id)
    {
        $bab = Bab::where('alias', $alias)->first();
        $dolanan = Dolanan::where('dolanan_id', $dolanan_id)->first();
        $namaTabel = $dolanan->detail;

        return view("admin.dolanan.$namaTabel.nambah", [
            'bab' => $bab,
            'dolanan' => $dolanan,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $alias, string $dolanan_id)
    {
        $bab = Bab::where('alias', $alias)->first();
        $dolanan = Dolanan::where('dolanan_id', $dolanan_id)->first();
        $data = $request->all();
        $data['bab_id'] = $bab->bab_id;
        $data['dolanan_id'] = $dolanan->dolanan_id;
        unset($data['_token']);

        foreach ($request->files as $name => $input) {
            $file = $request->file($name);
            $folder = "uploads/bab/$alias/dolanan";
            $filepath = $file->store($folder, 'public');
            $data[$name] = $filepath;
        }

        Helper::getModel($dolanan->detail)->create($data);

        $sakdurunge = str_replace('/nambah', '', url()->current());
        return redirect()->to($sakdurunge)->with('success', 1);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $alias, string $dolanan_id, string $detail_id)
    {
        $bab = Bab::where('alias', $alias)->first();
        $dolanan = Dolanan::where('dolanan_id', $dolanan_id)->first();
        $modelDetail = Helper::getModel($dolanan->detail);
        $detail = $modelDetail->where('id', $detail_id)->first();
        $namaTabel = $dolanan->detail;

        return view("admin.dolanan.$namaTabel.ngowah", [
            'bab' => $bab,
            'dolanan' => $dolanan,
            'detail' => $detail
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $alias, string $dolanan_id, string $detail_id)
    {
        $dolanan = Dolanan::where('dolanan_id', $dolanan_id)->first();
        $data = $request->all();
        unset($data['_token']);
        $detail = Helper::getModel($dolanan->detail)->where('id', $detail_id)->first();

        foreach ($request->files as $name => $input) {
            Storage::delete('public/' . $detail[$name]);
            $file = $request->file($name);
            $folder = "uploads/bab/$alias/dolanan";
            // kalau terjadi error The file "" does not exist in MimeTypeGuesser.php
            // coba naikkan `upload_max_filesize` dan `post_max_size` di `php.ini`
            $filepath = $file->store($folder, 'public');
            $data[$name] = $filepath;
        }

        $detail->update($data);

        $sakdurunge = str_replace("/ngowah/$detail_id", '', url()->current());
        return redirect()->to($sakdurunge)->with('success', 1);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $alias, string $dolanan_id, string $detail_id)
    {
        $dolanan = Dolanan::where('dolanan_id', $dolanan_id)->first();
        $detail = Helper::getModel($dolanan->detail)->where('id', $detail_id)->first();
        foreach ($detail->getAttributes() as $name => $value) {
            if (str_contains($value, "uploads/bab/$alias/")) {
                Storage::delete('public/' . $detail[$name]);
            }
        }
        $detail->delete();
        $sakdurunge = str_replace("/hapus/$detail_id", '', url()->current());
        return redirect()->to($sakdurunge)->with('successHapus', 1);
    }
}
