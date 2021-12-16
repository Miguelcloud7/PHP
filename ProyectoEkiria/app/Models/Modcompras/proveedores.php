<?php

namespace App\Models\Modcompras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class proveedores extends Model
{
    use HasFactory;
    protected $table = "proveedores";
    protected $fillabel = ['nombre','telefono','celular','encargado','descripcion'];

}
