<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    use HasFactory;
    use HasUlids;

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'penerimaan',
        'tgl_penerimaan',
        'alasan_tolak'
    ];

    public function tipe_hadiah(){
        return $this->belongsTo(TipeHadiah::class);
    }

    function toko() {
        return $this->belongsTo(Toko::class);
    }
}
