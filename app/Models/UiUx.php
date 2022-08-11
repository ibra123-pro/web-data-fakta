<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiUx extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "ui_ux";
    protected $primaryKey = "id";
    protected $fillable = ['id','judul','keterangan','catatan','sumber'];
}
