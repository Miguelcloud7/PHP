<?php

namespace Database\Factories\Empleados;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empleados\Cargo;

class CargoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Cargo::class;
    public function definition()
    {
        return [
            'nombre'=>$this->faker->jobTitle(),
        ];
    }
}
