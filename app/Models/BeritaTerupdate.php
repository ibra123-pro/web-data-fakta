<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaTerupdate extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "berita_terupdate";
    protected $primaryKey = "id";
    protected $fillable = ['id','judul','tanggal','keterangan','catatan','sumber'];
}
