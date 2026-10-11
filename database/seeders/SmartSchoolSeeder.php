<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SmartSchoolSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // 1. Masukkan data master kelas terlebih dahulu
        $kelasIds = [];
        $daftarKelas = ['X MIPA 1', 'X IPS 1', 'XI MIPA 2', 'XI IPS 2', 'XII MIPA 1'];
        
        foreach ($daftarKelas as $kelas) {
            $kelasIds[] = DB::table('classes')->insertGetId([
                'nama_kelas' => $kelas,
                'tingkat' => substr($kelas, 0, 3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 2. Masukkan minimal 10 data dummy siswa menggunakan Faker
        for ($i = 0; $i < 15; $i++) {
            DB::table('students')->insert([
                'class_id' => $faker->randomElement($kelasIds),
                'nisn' => $faker->unique()->numerify('00########'),
                'nama_lengkap' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'alamat' => 'Kupang, ' . $faker->streetName,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}