<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'nama_item',
        'harga',
        'stok',
        'gambar',
        'deskripsi',
    ];

    public function getPathAttribute()
    {
        $url = 'storage/gambar/'.$this->gambar;

        return $url;
    }
}
