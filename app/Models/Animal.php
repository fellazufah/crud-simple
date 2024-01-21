<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    //fungsi guarded adalah tidak membatasi semua file untuk masuk ke database
    protected $guarded = [];
}