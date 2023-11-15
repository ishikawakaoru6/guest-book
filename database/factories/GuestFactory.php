<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_tamu' => fake()->name(),
            'keperluan_tamu' => fake()->realTextBetween($minNbchars = 20, $maxNbchars = 40, $indexSize = 5),
            'bertemu' => fake()->name(),
            'asal_instansi' => fake()->company(),
            'jenis_kelamin' => $this->getRanArray(['Laki-laki', 'Perempuan']),
            'telepon' => fake()->e164PhoneNumber(),
            'tanggal_checkin' => fake()->dateTimeBetween('-2 year', 'now')
        ];
    }

    private function getRanArray($data = []){
        $count_data = count($data) - 1;
        $result = $data[mt_rand(0, $count_data)] ;
        return $result ;
    }
}
