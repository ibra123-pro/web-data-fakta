<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarArtificialIntelligence extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "komentar_artificial_intelligence";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama','tgl','email','komentar'];
}
