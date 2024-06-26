<?php

namespace Database\Factories;

use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class JabatanFactory extends Factory
{
    protected $model = Jabatan::class;

    public function definition()
    {
        return [
            'nama_jabatan' => $this->faker->jobTitle,
            'jam_mulai_kerja' => $this->faker->time(),
            'jam_selesai_kerja' => $this->faker->time(),
            'note_pekerjaan' => $this->faker->sentence(),
            'gaji_pokok' => $this->faker->numberBetween(3000000, 7000000),
            'tunjangan' => $this->faker->numberBetween(500000, 2000000),
            'potongan' => $this->faker->numberBetween(100000, 1000000),
        ];
    }
}
