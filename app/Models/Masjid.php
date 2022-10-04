<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    use HasFactory;
    protected $table = 'masjid';
    public $primaryKey = 'id_masjid';
    public $timestamps = false;
    protected $guarded = [''];
}
