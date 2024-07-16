<?php

use App\Http\Controllers\Admin\DolananController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BabController;
use App\Models\Bab;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.dashboard', ['bab' => Bab::all()]);
});

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::post('logout', [LogoutController::class, 'destroy'])->middleware('auth')->name('logout');



// halaman admin dinamis
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect('/');
    });

    Route::group(['prefix' => 'profil/'], function () {
        Route::get('/', [ProfilController::class, 'index']);
        Route::get('/ngowah', [ProfilController::class, 'edit']);
        Route::post('/ngowah', [ProfilController::class, 'update']);
    });

    Route::group(['prefix' => 'materi/{alias}'], function () {
        Route::get('/', [MateriController::class, 'index']);
        Route::get('/nambah', [MateriController::class, 'create']);
        Route::post('/nambah', [MateriController::class, 'store']);
        Route::get('/ngowah/{materi_id}', [MateriController::class, 'edit']);
        Route::post('/ngowah/{materi_id}', [MateriController::class, 'update']);
        Route::get('/hapus/{materi_id}', [MateriController::class, 'destroy']);
    });

    Route::group(['prefix' => 'dolanan/{alias}'], function () {
        Route::get('/', [DolananController::class, 'index']);

        Route::group(['prefix' => '/detail/{dolanan_id}'], function () {
            Route::get('/', [DolananController::class, 'tabel']);
            Route::get('/nambah', [DolananController::class, 'create']);
            Route::post('/nambah', [DolananController::class, 'store']);
            Route::get('/ngowah/{detail_id}', [DolananController::class, 'edit']);
            Route::post('/ngowah/{detail_id}', [DolananController::class, 'update']);
            Route::get('/hapus/{detail_id}', [DolananController::class, 'destroy']);
        });
    });
});

// halaman materi dinamis
Route::group(['prefix' => 'bab'], function () {
    Route::get('/', function () {
        return redirect('/');
    });

    Route::group(['prefix' => '/{alias}'], function () {
        Route::get('/', [BabController::class, 'index']);

        Route::get('/dolanan/{dolanan_id}', [BabController::class, 'dolanan']);
    });
});


// // versi non dinamis
// Route::group(['prefix' => 'tembang_dolanan'], function () {
//     Route::get('/', function () {
//         return view('layouts.materi.tembang.pilihanDolanan');
//     });

//     Route::get('/tts', function () {
//         return view('layouts.materi.tembang.tts');
//     });

//     Route::get('/nyanyi_lan_joged', function () {
//         return view('layouts.materi.tembang.nyanyiLanJoged');
//     });

//     Route::get('/temokake_tembung', function () {
//         return view('layouts.materi.tembang.temokakeTembung');
//     });
// });

// // versi non dinamis
// Route::group(['prefix' => 'gamelan'], function () {
//     Route::get('/', function () {
//         return view('layouts.materi.gamelan.pilihanDolanan');
//     });

//     Route::get('/jenis', function () {
//         return view('layouts.materi.gamelan.jenisGamelan');
//     });

//     Route::get('/tebak_gambar', function () {
//         return view('layouts.materi.gamelan.tebakGambar');
//     });
// });

// // versi non dinamis
// Route::group(['prefix' => 'prastawa_alam'], function () {
//     Route::get('/', function () {
//         return view('layouts.materi.prastawaAlam.pilihanDolanan');
//     });

//     Route::get('/spok', function () {
//         return view('layouts.materi.prastawaAlam.spok');
//     });

//     Route::get('/nyocokake', function () {
//         return view('layouts.materi.prastawaAlam.nyocokake');
//     });

//     Route::get('/temokake_tembung', function () {
//         return view('layouts.materi.prastawaAlam.temokakeTembung');
//     });
// });

// // versi non dinamis
// Route::group(['prefix' => 'dongeng_kewan'], function () {
//     Route::get('/', function () {
//         return view('layouts.materi.dongengKewan.pilihanDolanan');
//     });

//     Route::get('/tekaTekiSilang', function () {
//         return view('layouts.materi.dongengKewan.tts');
//     });

//     Route::get('/cocokDongeng', function () {
//         return view('layouts.materi.dongengKewan.nyocokkeDongeng');
//     });
// });
