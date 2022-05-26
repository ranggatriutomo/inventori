<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = "gudang";
    protected $Primarykey = "id";
    protected $fillable = [
        'id', 'kode_gudang', 'nama_gudang', 'lokasi_gudang'];
}
