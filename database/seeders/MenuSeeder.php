<?php

namespace Database\Seeders;

use App\Models\System\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu_no = 1;

        Menu::create([
            'title' => 'Beranda',
            'icon' => 'ti ti-smart-home',
            'url' => 'home',
            'source' => 'Home',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => null
        ]);

        Menu::create([
            'title' => 'Siswa',
            'icon' => 'ti ti-friends',
            'url' => 'student',
            'source' => 'Student',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Data Master'
        ]);

        Menu::create([
            'title' => 'Guru Tenaga Pendidik',
            'icon' => 'ti ti-users',
            'url' => 'teacher',
            'source' => 'Teacher',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Data Master'
        ]);

        Menu::create([
            'title' => 'Mata Pelajaran',
            'icon' => 'ti ti-color-swatch',
            'url' => 'subjects',
            'source' => 'Subjects',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Data Master'
        ]);

        Menu::create([
            'title' => 'Orangtua/Wali Siswa',
            'icon' => 'ti ti-home-heart',
            'url' => 'student-guardian',
            'source' => 'StudentGuardian',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Data Master'
        ]);

        Menu::create([
            'title' => 'Tahun Ajaran',
            'icon' => 'ti ti-calendar-time',
            'url' => 'academic-year',
            'source' => 'AcademicYear',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Kurikulum'
        ]);

        Menu::create([
            'title' => 'Semester',
            'icon' => 'ti ti-calendar-minus',
            'url' => 'semester',
            'source' => 'Semester',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Kurikulum'
        ]);

        Menu::create([
            'title' => 'Rombongan Belajar',
            'icon' => 'ti ti-chalkboard',
            'url' => 'class-group',
            'source' => 'ClassGroup',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Kurikulum'
        ]);

        Menu::create([
            'title' => 'Kehadiran',
            'icon' => 'ti ti-user-check',
            'url' => 'attendance',
            'source' => 'Attendance',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Presensi'
        ]);

        Menu::create([
            'title' => 'Izin Siswa',
            'icon' => 'ti ti-user-exclamation',
            'url' => 'excuse-letter-submission',
            'source' => 'ExcuseLetterSubmission',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Presensi'
        ]);

        Menu::create([
            'title' => 'Komponen Penilaian',
            'icon' => 'ti ti-percentage',
            'url' => 'assessment-component',
            'source' => 'AssessmentComponent',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Penilaian'
        ]);

        Menu::create([
            'title' => 'Nilai',
            'icon' => 'ti ti-file-check',
            'url' => 'assessment',
            'source' => 'Assessment',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Penilaian'
        ]);

        Menu::create([
            'title' => 'Rapor',
            'icon' => 'ti ti-report',
            'url' => 'report-card',
            'source' => 'ReportCard',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Penilaian'
        ]);

        Menu::create([
            'title' => 'Menu',
            'icon' => 'ti ti-category-2',
            'url' => 'menu',
            'source' => 'Menu',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Manajemen Sistem'
        ]);

        Menu::create([
            'title' => 'Akun',
            'icon' => 'ti ti-key',
            'url' => 'account',
            'source' => 'Account',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Manajemen Sistem'
        ]);

        Menu::create([
            'title' => 'Hak Akses',
            'icon' => 'ti ti-shield-lock',
            'url' => 'authorization',
            'source' => 'Authorization',
            'order_number' => $menu_no++,
            'parent' => null,
            'member_of' => 'Manajemen Sistem'
        ]);
    }
}
