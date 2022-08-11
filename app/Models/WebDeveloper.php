<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebDeveloper extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "web_developer";
    protected $primaryKey = "id";
    protected $fillable = ['id','judul','keterangan','catatan','sumber'];
}
