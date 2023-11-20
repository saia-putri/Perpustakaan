<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public function kategoris()
    {
        return $this->belongsTo(kategori::class);
    }

    use HasFactory;

    public function raks()
    {
        return $this->belongsTo(rak::class);
    }
}
