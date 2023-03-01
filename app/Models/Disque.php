<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Artiste;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disque extends Model
{
    use HasFactory;

    public function artiste()
    {
        return $this->belongsTo(Artiste::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
