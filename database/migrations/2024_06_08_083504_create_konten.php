<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bab', function (Blueprint $table) {
            $table->id('bab_id');
            $table->string('judhul');
            $table->string('gambar');
            $table->string('alias')->unique();
        });

        Schema::create('materi', function (Blueprint $table) {
            $table->id('materi_id');
            $table->unsignedBigInteger('bab_id');
            $table->foreign('bab_id')->references('bab_id')->on('bab');
            $table->string('judhul')->nullable();
            $table->longText('cerita')->nullable();
            $table->string('katrangan')->nullable();
            $table->string('larik')->nullable();
            $table->longText('pesen')->nullable();
            $table->string('video')->nullable();
            $table->string('gambar1')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('swara')->nullable();
            $table->longText('penyebab')->nullable();
            $table->string('tab')->default('informasi'); // informasi / pesen / dolanan
            $table->timestamps();
        });

        Schema::create('dolanan', function (Blueprint $table) {
            $table->id('dolanan_id');
            $table->string('judhul');
            $table->string('gambar');
            $table->string('detail'); // nama tabel detail dolanan ex: dolanan_tts
        });

        Schema::create('bab_dolanan', function (Blueprint $table) {
            $table->unsignedBigInteger('bab_id');
            $table->unsignedBigInteger('dolanan_id');
            $table->foreign('bab_id')->references('bab_id')->on('bab');
            $table->foreign('dolanan_id')->references('dolanan_id')->on('dolanan');
        });

        Schema::create('dolanan_temokake_tembung', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bab_id');
            $table->unsignedBigInteger('dolanan_id');
            $table->foreign('bab_id')->references('bab_id')->on('bab');
            $table->foreign('dolanan_id')->references('dolanan_id')->on('dolanan');
            $table->string('kata1');
            $table->string('kata2')->nullable();
            $table->string('kata3')->nullable();
            $table->string('kata4')->nullable();
            $table->string('kata5')->nullable();
            $table->string('kata6')->nullable();
            $table->timestamps();
        });

        Schema::create('dolanan_tts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bab_id');
            $table->unsignedBigInteger('dolanan_id');
            $table->foreign('bab_id')->references('bab_id')->on('bab');
            $table->foreign('dolanan_id')->references('dolanan_id')->on('dolanan');
            $table->string('pitakonan');
            $table->string('wangsulan');
            $table->string('pilihan1');
            $table->string('pilihan2');
            $table->string('pilihan3');
            $table->string('pilihan4');
            $table->timestamps();
        });

        Schema::create('dolanan_nyocokake', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bab_id');
            $table->unsignedBigInteger('dolanan_id');
            $table->foreign('bab_id')->references('bab_id')->on('bab');
            $table->foreign('dolanan_id')->references('dolanan_id')->on('dolanan');
            $table->string('pitakon1')->nullable();
            $table->string('wangsulan1')->nullable();
            $table->string('pitakon2')->nullable();
            $table->string('wangsulan2')->nullable();
            $table->string('pitakon3')->nullable();
            $table->string('wangsulan3')->nullable();
            $table->string('pitakon4')->nullable();
            $table->string('wangsulan4')->nullable();
            $table->timestamps();
        });

        Schema::create('dolanan_nyocokake_dongeng', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bab_id');
            $table->unsignedBigInteger('dolanan_id');
            $table->foreign('bab_id')->references('bab_id')->on('bab');
            $table->foreign('dolanan_id')->references('dolanan_id')->on('dolanan');
            $table->string('pitakon1')->nullable();
            $table->string('wangsulan1')->nullable();
            $table->string('pitakon2')->nullable();
            $table->string('wangsulan2')->nullable();
            $table->string('pitakon3')->nullable();
            $table->string('wangsulan3')->nullable();
            $table->string('pitakon4')->nullable();
            $table->string('wangsulan4')->nullable();
            $table->timestamps();
        });

        Schema::create('dolanan_susun_spok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bab_id');
            $table->unsignedBigInteger('dolanan_id');
            $table->foreign('bab_id')->references('bab_id')->on('bab');
            $table->foreign('dolanan_id')->references('dolanan_id')->on('dolanan');
            $table->string('kata1');
            $table->string('kata2')->nullable();
            $table->string('kata3')->nullable();
            $table->string('kata4')->nullable();
            $table->string('kata5')->nullable();
            $table->string('kata6')->nullable();
            $table->timestamps();
        });

        Schema::create('dolanan_tebak_gambar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bab_id');
            $table->unsignedBigInteger('dolanan_id');
            $table->foreign('bab_id')->references('bab_id')->on('bab');
            $table->foreign('dolanan_id')->references('dolanan_id')->on('dolanan');
            $table->string('gambar1')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
            $table->string('gambar4')->nullable();
            $table->string('gambar5')->nullable();
            $table->string('gambar6')->nullable();
            $table->string('wangsulan')->nullable();
            $table->timestamps();
        });

        Schema::create('dolanan_nyanyi_lan_joged', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bab_id');
            $table->unsignedBigInteger('dolanan_id');
            $table->foreign('bab_id')->references('bab_id')->on('bab');
            $table->foreign('dolanan_id')->references('dolanan_id')->on('dolanan');
            $table->string('swara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bab_dolanan');
        Schema::dropIfExists('dolanan_tts');
        Schema::dropIfExists('dolanan_nyocokake');
        Schema::dropIfExists('dolanan_susun_spok');
        Schema::dropIfExists('dolanan_nyocokake_dongeng');
        Schema::dropIfExists('dolanan_nyanyi_lan_joged');
        Schema::dropIfExists('dolanan_tebak_gambar');
        Schema::dropIfExists('dolanan_temokake_tembung');
        Schema::dropIfExists('dolanan');
        Schema::dropIfExists('materi');
        Schema::dropIfExists('bab');
    }
};
