<?php

namespace Database\Factories;

use App\Models\Gaji;
use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

class GajiFactory extends Factory
{
    protected $model = Gaji::class;

    public function definition()
    {
        return [
            'karyawan_id' => Karyawan::factory(), // Create a new Karyawan for each Gaji
            'total' => $this->faker->numberBetween(3000000, 7000000),
            'potongan' => $this->faker->numberBetween(100000, 1000000),
            'tunjangan' => $this->faker->numberBetween(500000, 2000000),
        ];
    }
}
