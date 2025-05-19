<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat role jika belum ada
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);
        $pelangganRole = Role::firstOrCreate(['name' => 'pelanggan']);
        
        // Buat user admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // Ganti dengan password aman
            ]
        );
        if (!$admin->hasRole('super_admin')) {
            $admin->assignRole($superAdminRole);
        }

        // Buat user guru
        $pelanggan = User::firstOrCreate(
            ['email' => 'pelanggan@pelanggan.com'],
            [
                'name' => 'Guru',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
            ]
        );
        if (!$pelanggan->hasRole('pelanggan')) {
            $pelanggan->assignRole($pelangganRole);
        }


        // Jalankan seeder lainnya
        $this->call([
            PelangganSeeder::class,
            MobilSeeder::class,
            MotorSeeder::class,
        ]);
    }
}
