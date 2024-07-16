<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BabDolanan extends Model
{

    use HasFactory;
    protected $table = 'bab_dolanan';
    protected $guarded = [];

    public function bab()
    {
        return $this->belongsTo(Bab::class, 'bab_id', 'bab_id');
    }

    public function dolanan()
    {
        return $this->belongsTo(Dolanan::class, 'dolanan_id', 'dolanan_id');
    }
}
