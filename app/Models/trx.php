<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trx extends Model
{
    protected $table = "trx";
    protected $Primarykey = "id";
    protected $fillable = [
        'id', 'kode_trx', 'kode_peminjam', 'tgl_trx'];
}



