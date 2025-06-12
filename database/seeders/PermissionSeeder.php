<?php

namespace Database\Seeders;

use App\Models\System\Menu;
use App\Models\SLP\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu_number = 1;

        foreach (Menu::orderBy('order_number')->get() as $menu) {
            Permission::create([
                'type' => 'Menu',
                'menu_id' => $menu->id,
                'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title,
                'guard_name' => 'web',
                'number' => $menu_number++,
            ]);

            if($menu->title == 'Menu') {
                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Melihat Data',
                    'guard_name' => 'web',
                    'number' => '1',
                ]);

                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Menambah Data',
                    'guard_name' => 'web',
                    'number' => '2',
                ]);

                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Mengubah Data',
                    'guard_name' => 'web',
                    'number' => '3',
                ]);

                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Menghapus Data',
                    'guard_name' => 'web',
                    'number' => '4',
                ]);
            }

            if($menu->title == 'Hak Akses') {
                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Melihat Peran',
                    'guard_name' => 'web',
                    'number' => '1',
                ]);

                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Menambah Peran',
                    'guard_name' => 'web',
                    'number' => '2',
                ]);

                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Mengubah Peran',
                    'guard_name' => 'web',
                    'number' => '3',
                ]);

                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Melihat Izin',
                    'guard_name' => 'web',
                    'number' => '4',
                ]);

                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Menambah Izin',
                    'guard_name' => 'web',
                    'number' => '5',
                ]);

                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Mengubah Izin',
                    'guard_name' => 'web',
                    'number' => '6',
                ]);

                Permission::create([
                    'type' => 'Izin',
                    'menu_id' => $menu->id,
                    'name' => ($menu->member_of ? '['.$menu->member_of.'] ' : '').$menu->title.' - Memberi Hak Akses',
                    'guard_name' => 'web',
                    'number' => '8',
                ]);
            }
        }
    }
}
