<?php

namespace App\Models\Modcompras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class proveedores extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','telefono','celular','encargado','descripcion'];
    protected $primaryKey = 'id_proveedores';
    public $timestamps = false;

}
