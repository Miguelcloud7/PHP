<?php

namespace App\Models\Modcompras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;
    protected $fillabel = ['nombre','apellido','edad'];
}
