<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    use HasUuids;
    
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    function hadiah() {
        return $this->hasMany(Hadiah::class);
    }
}
