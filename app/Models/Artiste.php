<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;

    public function disques()
    {
        return $this->hasMany(Genre::class, 'artiste_id');
    }
}
