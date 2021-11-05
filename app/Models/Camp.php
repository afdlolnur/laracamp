<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //tambahan untuk mengaktifkan fitur softDeletes

class Camp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'price'];
}
