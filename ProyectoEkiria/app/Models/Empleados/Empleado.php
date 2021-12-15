<?php

namespace App\Models\Empleados;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleados\Cargo;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable=['nombre','edad','apellidos','idCargo'];
    public function CargoEmpleado(){
        return $this->belongsTo(Cargo::class,'idCargo');
    }
}
