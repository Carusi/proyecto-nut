<?php

namespace Database\Factories;

use App\Models\cuenta_staff;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuenta_staff>
 */
class Cuenta_staffFactory extends Factory
{
    protected $model =cuenta_staff::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        $apellido = $this->faker->word(20);
        return [
            'cue_nombre'=>$name,
            'cue_apellido'=>$apellido,
            'cue_correo' => fake()->safeEmail(),
            'cue_correo_verified_at' => now(),
            'cue_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
