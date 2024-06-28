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
            'total' => $this->faker->numberBetween(3, 7)*1000000,
            'potongan' => $this->faker->numberBetween(1, 3)*100000,
            'tunjangan' => $this->faker->numberBetween(5, 2)*1000000,
        ];
    }
}
