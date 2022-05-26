<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $table = "item";
  protected $Primarykey = "id";
  protected $fillable = [
      'id', 'kode_item', 'nama_item', 'jenis_item', 'stok_item', 'satuan', 'kondisi' ];
}
