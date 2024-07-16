<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Bab;
use App\Models\BabDolanan;
use App\Models\Dolanan;
use App\Models\Materi;
use Illuminate\Http\Request;

class BabController extends Controller
{
    public function index(Request $request, $alias)
    {
        $bab = Bab::where('alias', $alias)->first();
        $listDolanan = BabDolanan::where('bab_id', $bab->bab_id)->with('dolanan')->get();
        $materi = Materi::where('bab_id', $bab->bab_id);
        $listJudhul = Materi::select('judhul')
            ->where('bab_id', $bab->bab_id)
            ->where('judhul', '<>', '')
            ->whereNotNull('judhul')
            ->get();
        $listPesen = Materi::where('bab_id', $bab->bab_id)
            ->where('tab', 'pesen')
            ->get();
        $judhul = $request->input('judhul');

        if ($judhul) $materi->where('judhul', $judhul);

        $materi = $materi->first();

        return view("layouts.bab.$alias", [
            'bab' => $bab,
            'listDolanan' => $listDolanan,
            'listJudhul' => $listJudhul,
            'listPesen' => $listPesen, // untuk menampilkan pesen bab gamelan
            'materi' => $materi,
            'pesen' => $materi['pesen'], // untuk menampilkan pesen selain bab gamelan
        ]);
    }


    public function dolanan(Request $request, $alias, $dolanan_id)
    {
        $bab = Bab::where('alias', $alias)->first();
        $dolanan = Dolanan::where('dolanan_id', $dolanan_id)->first();
        $listDolanan = BabDolanan::where('bab_id', $bab->bab_id)->with('dolanan')->get();
        // $listMateri = Materi::where('bab_id', $bab->bab_id)->where('tab', 'informasi')->paginate(1);
        // $listPesen = Materi::where('bab_id', $bab->bab_id)->where('tab', 'pesen')->get();
        $detail = Helper::getModel($dolanan->detail)->where('bab_id', $bab->bab_id)->simplePaginate(
            1,
            '*',
            'detail_page'
        );
        // $detail->setPageName('detail_page');

        // dd($detail);

        $materi = Materi::where('bab_id', $bab->bab_id);
        $listJudhul = Materi::select('judhul')
            ->where('bab_id', $bab->bab_id)
            ->where('judhul', '<>', '')
            ->whereNotNull('judhul')
            ->get();
        $listPesen = Materi::where('bab_id', $bab->bab_id)
            ->where('tab', 'pesen')
            ->get();
        $judhul = $request->input('judhul');

        if ($judhul) $materi->where('judhul', $judhul);

        $materi = $materi->first();

        return view("layouts.bab.dolanan." . $dolanan->detail, [
            'bab' => $bab,
            'paginator' => $detail,
            'detail' => $detail->count() ? $detail->items()[0] : $detail->items(),
            'dolanan' => $dolanan,
            'listDolanan' => $listDolanan,
            'listJudhul' => $listJudhul,
            'listPesen' => $listPesen,
            'materi' => $materi,
            'pesen' => $materi['pesen'],
        ]);
    }
}
