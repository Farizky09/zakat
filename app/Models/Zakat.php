<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    use HasFactory;
    protected $table = 'zakat';
    public $primaryKey = 'id_zakat';
    public $timestamps = false;
    protected $guarded = [''];
}
