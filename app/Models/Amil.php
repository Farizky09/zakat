<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amil extends Model
{
    use HasFactory;
    protected $table = 'amil';
    public $primaryKey = 'id_amil';
    public $timestamps = false;
    protected $guarded = [''];
}
