<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtificialIntelligence extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "artificial_intelligence";
    protected $primaryKey = "id";
    protected $fillable = ['id','judul','keterangan','catatan','sumber'];
}
