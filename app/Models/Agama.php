<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "agama";
    protected $primaryKey = "id";
    protected $fillable = ['id','judul','keterangan','file','catatan','sumber'];
}
