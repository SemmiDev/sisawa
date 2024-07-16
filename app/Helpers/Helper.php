<?php

namespace App\Helpers;

use App\Models\DolananNyanyiLanJoged;
use App\Models\DolananNyocokake;
use App\Models\DolananNyocokakeDongeng;
use App\Models\DolananSusunSpok;
use App\Models\DolananTebakGambar;
use App\Models\DolananTemokakeTembung;
use App\Models\DolananTts;
use Exception;

class Helper
{
    /**
     * shuffle for associative arrays, preserves key=>value pairs.
     * Referensi: https://www.php.net/manual/en/function.shuffle.php#94697
     */
    public static function shuffle_assoc(&$array)
    {
        $keys = array_keys($array);

        shuffle($keys);

        foreach ($keys as $key) {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return true;
    }


    public static function snake_case($text)
    {
        return strtolower(preg_replace('/\s/', '_', $text));
    }

    /**
     * @return Model
     */
    public static function getModel($tableName)
    {
        switch ($tableName) {
            case 'dolanan_tts':
                return new DolananTts();
            case 'dolanan_tebak_gambar':
                return new DolananTebakGambar();
            case 'dolanan_nyanyi_lan_joged':
                return new DolananNyanyiLanJoged();
            case 'dolanan_temokake_tembung':
                return new DolananTemokakeTembung();
            case 'dolanan_nyocokake':
                return new DolananNyocokake();
            case 'dolanan_nyocokake_dongeng':
                return new DolananNyocokakeDongeng();
            case 'dolanan_susun_spok':
                return new DolananSusunSpok();
            default:
                throw new Exception("Model untuk tabel `$tableName` belum didefinisikan");
        }
    }
}
