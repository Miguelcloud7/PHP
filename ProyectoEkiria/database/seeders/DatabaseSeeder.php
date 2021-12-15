<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Empleados\Empleado;
use App\Models\Empleados\Cargo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        Cargo::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $this->call(Cargos_Seeder::class);
        $this->call(Servicios_Seeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
