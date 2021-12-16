<?php

namespace App\Models\Ventas;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ventas\tipo_servicios;

class servicios extends Model
{
    use HasFactory;
    protected $fillable=['nombre','descripcion','img_servicios','precio','tipo_servicio_id'];
    public function TipoServicios(){
        return $this->belongsTo(tipo_servicios::class,'tipo_servicio_id','id_tipo_servicio');
    }

}
