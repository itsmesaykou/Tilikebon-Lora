<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Cahaya;
use App\Models\Suhu;
use App\Models\Kelembapan;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $startDate = Carbon::now()->subMonth(); // Mengambil tanggal satu bulan yang lalu
        $endDate = Carbon::now(); // Mengambil tanggal saat ini

        // Menambahkan data menggunakan Faker
        for ($i = 0; $i < 10; $i++) { // Mengganti 10 dengan jumlah data yang ingin Anda tambahkan

            $randomTimestamp = mt_rand($startDate->timestamp, $endDate->timestamp);
            $randomDate = Carbon::createFromTimestamp($randomTimestamp);
            Suhu::create([
                'created_at' => $randomDate,
                'suhu' => $faker->randomNumber(2,99), 
            ]);

            Cahaya::create([
                'created_at' => $randomDate,
                'cahaya' => $faker->randomNumber(2, 99), 
            ]);


            Kelembapan::create([
                'created_at' => $randomDate,
                'kelembapan' => $faker->randomNumber(2,99), 
            ]);

            User::create([
                'Name' => $faker->name,
                'Username' => $faker->username,
                'phone' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'password' => '123'
                
            ]);
        }
    }
}
