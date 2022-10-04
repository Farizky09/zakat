<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;
    protected $table = 'penerima';
    public $primaryKey = 'id_penerima';
    public $timestamps = false;
    protected $guarded = [''];
}
