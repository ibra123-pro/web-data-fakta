<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AndroidDeveloper extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "android_developer";
    protected $primaryKey = "id";
    protected $fillable = ['id','judul','keterangan','catatan','sumber'];
}
