<?php

namespace Database\Seeders;

use App\Models\Poli;
use App\Models\User;
use App\Models\Obat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Data Poli
        $poliUmum = Poli::create([
            'nama_poli' => 'Poli Umum',
            'keterangan' => 'Pelayanan kesehatan umum',
        ]);

        $poliGigi = Poli::create([
            'nama_poli' => 'Poli Gigi',
            'keterangan' => 'Pelayanan kesehatan gigi dan mulut',
        ]);

        // 2. Seed Data Admin
        User::create([
            'nama' => 'Admin Poliklinik',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'alamat' => 'Semarang',
            'no_hp' => '081234567890',
        ]);

        // 3. Seed Data Dokter
        User::create([
            'nama' => 'dr. Agus Santoso',
            'email' => 'dokter.agus@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
            'id_poli' => $poliUmum->id,
            'alamat' => 'Semarang',
            'no_hp' => '081298765432',
        ]);

        // 4. Seed Data Pasien
        User::create([
            'nama' => 'Deni Kurniawan',
            'email' => 'deni@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
            'alamat' => 'Tegal',
            'no_ktp' => '3328000000000001',
            'no_hp' => '085700001111',
            'no_rm' => '202610-001',
        ]);

        // 5. Seed Data Obat
        Obat::create([
            'nama_obat' => 'Paracetamol 500mg',
            'kemasan' => 'Strip @ 10 Tablet',
            'harga' => 10000,
        ]);

        Obat::create([
            'nama_obat' => 'Amoxicillin 500mg',
            'kemasan' => 'Strip @ 10 Kaplet',
            'harga' => 15000,
        ]);
    }
}