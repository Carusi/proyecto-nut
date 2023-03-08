<?php

namespace Database\Seeders;

use App\Models\cuenta_staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Cuenta_satffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cuenta_staff::create([
            'cue_nombre'=>'emmanuel',
            'cue_apellido'=>'carusi',
            'cue_correo' => 'emmanuel@gmail.com',
            'cue_password' => bcrypt('123456')
        ]);

        cuenta_staff::factory(1)->create();
    }
}
