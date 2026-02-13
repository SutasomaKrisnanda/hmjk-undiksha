<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {

        $departments = [
            [
                'name' => 'Bidang Inti',
                'slug' => 'inti',
                'color_theme' => '#000000', // Hitam
                'description' => 'Badan Pengurus Harian (BPH) HMJ Kedokteran.',
                'order_level' => 1
            ],
            [
                'name' => 'Bidang Pendidikan dan Profesi',
                'slug' => 'pendpro',
                'color_theme' => '#242f84', // Biru Tua
                'description' => 'Mengurus aspek akademik dan pengembangan profesi.',
                'order_level' => 2
            ],
            [
                'name' => 'Bidang Pengembangan SDM',
                'slug' => 'psdm',
                'color_theme' => '#5e0909', // Merah Marun
                'description' => 'Fokus pada kaderisasi dan pengembangan soft skill.',
                'order_level' => 3
            ],
            [
                'name' => 'Bidang Kesejahteraan Mahasiswa',
                'slug' => 'kesma',
                'color_theme' => '#535002', // Kuning/Olive Gelap
                'description' => 'Advokasi dan kesejahteraan mahasiswa.',
                'order_level' => 4
            ],
            [
                'name' => 'Bidang Pengabdian Masyarakat',
                'slug' => 'pengmas',
                'color_theme' => '#5c1a00', // Oranye/Bata
                'description' => 'Wujud nyata pengabdian kepada masyarakat luas.',
                'order_level' => 5
            ],
            [
                'name' => 'Bidang Komunikasi & Informasi',
                'slug' => 'komnasinfo',
                'color_theme' => '#197073', // Biru Muda/Teal
                'description' => 'Pusat informasi dan media kreatif.',
                'order_level' => 6
            ],
            [
                'name' => 'Bidang Internal & Eksternal',
                'slug' => 'inteks',
                'color_theme' => '#2e0f00', // Coklat Tua
                'description' => 'Menjaga hubungan internal dan eksternal organisasi.',
                'order_level' => 7
            ],
            [
                'name' => 'Bidang Dana Usaha',
                'slug' => 'prodanus',
                'color_theme' => '#055c23', // Hijau
                'description' => 'Kewirausahaan dan pendanaan organisasi.',
                'order_level' => 8
            ],
        ];

        foreach ($departments as $dept) {
            Department::create($dept);
        }
    }
}
