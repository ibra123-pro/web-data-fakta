<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IosDeveloper extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "ios_developer";
    protected $primaryKey = "id";
    protected $fillable = ['id','judul','keterangan','catatan','sumber'];
}
