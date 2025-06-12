<?php

namespace Database\Seeders;

use App\Models\SLP\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Developer',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Kepala Sekolah',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Wali Kelas',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Guru Tenaga Pendidik',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Orangtua/Wali Siswa',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Siswa',
            'guard_name' => 'web',
        ]);
    }
}
