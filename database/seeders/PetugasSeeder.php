<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::query()->create([
            "nama" => "tegarp00",
            "email" => "tegarp00@gmail.com",
            "password" => "whoami1234"
        ]);
    }
}
