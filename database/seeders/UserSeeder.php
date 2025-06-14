<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Laravolt\Avatar\Facade as Avatar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $avatar = md5('Sammy Surbakti');
        Avatar::create('Sammy Surbakti')->save(storage_path('app/src/img/user/'.$avatar.'.png'), $quality = 100);

        $dev = User::create([
            'name' => 'Sammy',
            'username' => 'sammy',
            'email' => 'sammysurbakti@gmail.com',
            'password' => bcrypt('sammy'),
            'avatar' => $avatar.'.png',
            'account_status' => 1,
        ]);

        $dev->assignRole('Developer');
    }
}
