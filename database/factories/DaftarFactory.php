<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Pasien;
use \App\Models\Poli;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daftar>
 */
class DaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idPasien = \App\Models\Pasien::pluck('id') -> toArray();
        $idPoli = \App\Models\Poli::pluck('id') -> toArray();
        return [
            'pasien_id' => $this->faker->randomElement($idPasien),    
            'tanggal_daftar' => $this->faker->date(),    
            'poli_id' => $this->faker->randomElement($idPoli),    
            'keluhan' => $this->faker->sentence(5),    
            'diagnosis' => $this->faker->sentence(5),    
            'tindakan' => $this->faker->sentence(5),    
        ];
    }
}
