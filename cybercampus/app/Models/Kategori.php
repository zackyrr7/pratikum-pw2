<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\berita;

class kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
}
