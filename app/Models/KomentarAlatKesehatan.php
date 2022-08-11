<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarAlatKesehatan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "komentar_alat_kesehatan";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama','tgl','email','komentar'];
}
