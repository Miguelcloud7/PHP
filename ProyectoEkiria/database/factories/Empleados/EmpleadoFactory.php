<?php

namespace Database\Factories\Empleados;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empleados\Empleado;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Empleado::class;
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'edad'=>$this->faker->numberBetween($min=18,$max=110),
            'apellidos'=>$this->faker->lastName(),
            'idcargo'=>$this->faker->numberBetween($min=1,$max=23),
        ];
    }
}
