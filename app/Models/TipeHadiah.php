<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeHadiah extends Model
{
    use HasFactory;
    use HasUlids;

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    function hadiah() {
        return $this->hasMany(Hadiah::class, 'toko_id', 'id');
    }
}
