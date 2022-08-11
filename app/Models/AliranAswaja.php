<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AliranAswaja extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "aliran_aswaja";
    protected $primaryKey = "id";
    protected $fillable = ['id','judul','keterangan','catatan','sumber'];
}
