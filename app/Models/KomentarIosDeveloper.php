<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarIosDeveloper extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "komentar_ios_developer";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama','tgl','email','komentar'];
}
