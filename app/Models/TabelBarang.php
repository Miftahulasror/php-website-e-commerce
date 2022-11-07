<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelBarang extends Model
{
    use HasFactory;
    protected $fillable=['kodebrg','nama','stok','harga','gambar'];
}
