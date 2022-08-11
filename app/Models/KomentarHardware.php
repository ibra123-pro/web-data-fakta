<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarHardware extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "komentar_hardware";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama','tgl','email','komentar'];
}
