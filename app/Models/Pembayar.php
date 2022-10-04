<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayar extends Model
{
    use HasFactory;
    protected $table = 'pembayar';
    public $timestamps = false;
    protected $guarded = [''];
}
