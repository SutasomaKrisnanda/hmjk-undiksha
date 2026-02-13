<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Structure;

class StructureSeeder extends Seeder
{
    public function run(): void
    {

        $data = [
            // DEKANAT (Tetap Level 1)
            ['name' => 'Prof. Dr. Ahmad Djojosugito, dr., SpB.OT., MHA., MBA., FICS(orth).', 'position' => 'Pelindung', 'division' => 'Dekanat', 'order_level' => 1],
            ['name' => 'dr. I Putu Suriyasa, M.S., PKK., SP.OK.', 'position' => 'Wakil Dekan I', 'division' => 'Dekanat', 'order_level' => 1],
            ['name' => 'Dr. dr. Ni Luh Kadek Alit Arsani, S. Ked., M. Biomed.', 'position' => 'Wakil Dekan II', 'division' => 'Dekanat', 'order_level' => 1],
            ['name' => 'Dr. dr. Made Budiawan, S.Ked., M.Kes., AIFO.', 'position' => 'Wakil Dekan III', 'division' => 'Dekanat', 'order_level' => 1],
            ['name' => 'dr. Ida Ayu Diah Purnama Sari, Sp.KK.', 'position' => 'Pembimbing', 'division' => 'Dekanat', 'order_level' => 1],

            // BIDANG INTI (Dulu BPH) - Hitam (Zinc/Gray-900)
            ['name' => 'Masayu Adithi Shivadevi', 'position' => 'Ketua Himpunan', 'division' => 'Bidang Inti', 'division_code' => 'inti', 'color_theme' => 'zinc', 'order_level' => 2],
            ['name' => 'Pradipta Meida Anggraini', 'position' => 'Wakil Ketua', 'division' => 'Bidang Inti', 'division_code' => 'inti', 'color_theme' => 'zinc', 'order_level' => 2],
            ['name' => 'Cokorda Istri Bintang Kusuma Dewi', 'position' => 'Sekretaris I', 'division' => 'Bidang Inti', 'division_code' => 'inti', 'color_theme' => 'zinc', 'order_level' => 2],
            ['name' => 'Ni Putu Cecilia Purnantari Putri', 'position' => 'Sekretaris II', 'division' => 'Bidang Inti', 'division_code' => 'inti', 'color_theme' => 'zinc', 'order_level' => 2],
            ['name' => 'Luh Panca Chaira Prasetya', 'position' => 'Bendahara I', 'division' => 'Bidang Inti', 'division_code' => 'inti', 'color_theme' => 'zinc', 'order_level' => 2],
            ['name' => 'Ni Luh Deha Vania', 'position' => 'Bendahara II', 'division' => 'Bidang Inti', 'division_code' => 'inti', 'color_theme' => 'zinc', 'order_level' => 2],

            // BIDANG PENDPRO (Pendidikan & Profesi) - Biru Tua (Blue)
            ['name' => 'Luh Ayu Sri Kirana Putri Suryawan', 'position' => 'Kepala Bidang', 'division' => 'Bidang Pendidikan dan Profesi', 'division_code' => 'pendpro', 'color_theme' => 'blue', 'order_level' => 3],
            ['name' => 'Rizqy Evandi', 'position' => 'Sekretaris Bidang', 'division' => 'Bidang Pendidikan dan Profesi', 'division_code' => 'pendpro', 'color_theme' => 'blue', 'order_level' => 4],
            ...$this->mapAnggota([
                'Ngakan Putu Ngurah Raditya Indrasta', 'Ni Kadek Widiantari', 'Ni Made Ayu Mas Utari',
                'I Putu Nanda Widya Merta', 'Ni Luh Gede Harum Cempaka Dewi', 'Luh Putu Nadia Mayurika Pragyawati Adnyana',
                'Ni Kadek Delanita Mahardani', 'Komang Cistasari Damayanti Dena', 'Gede Widia',
                'Kadek Dinda Badrawati', 'Putu Nadya Hapsari', 'I Dewa Gede Rama Jaya Winata',
                'Timbul Fresli Simbolon', 'Made Keyza Prema Adriyani', 'I Made Krisna Adi Putra Arthayasa'
            ], 'Bidang Pendidikan dan Profesi', 'pendpro', 'blue'),

            // BIDANG PSDM - Merah (Red)
            ['name' => 'I Komang Rezza Kurnia Utama', 'position' => 'Kepala Bidang', 'division' => 'Bidang PSDM', 'division_code' => 'psdm', 'color_theme' => 'red', 'order_level' => 3],
            ['name' => 'Ida Bagus Gede Widyasmara Bawa', 'position' => 'Sekretaris Bidang', 'division' => 'Bidang PSDM', 'division_code' => 'psdm', 'color_theme' => 'red', 'order_level' => 4],
            ...$this->mapAnggota([
                'I Putu Adiarta', 'Made Nadia Paramitha Arisanti', 'Syifa Rahmi Maulida',
                'I Putu Agus Pradnya Mulia Mahottama', 'Ni Putu Laura Patricia Dinanda', 'Riqqah Fadhilah',
                'Dewa Made Putra Daniswara', 'Wulan Rachmania Putri', 'Chrismy Glori Putri Situmorang'
            ], 'Bidang PSDM', 'psdm', 'red'),

            // BIDANG KESMA - Kuning (Yellow)
            ['name' => 'St. Qamariatul Kibitiah', 'position' => 'Kepala Bidang', 'division' => 'Bidang Kesejahteraan Mahasiswa', 'division_code' => 'kesma', 'color_theme' => 'yellow', 'order_level' => 3],
            ['name' => 'I Gede Wedhana Putrajaya', 'position' => 'Sekretaris Bidang', 'division' => 'Bidang Kesejahteraan Mahasiswa', 'division_code' => 'kesma', 'color_theme' => 'yellow', 'order_level' => 4],
            ...$this->mapAnggota([
                'Putu Marsya Febi Sabrina Putri', 'Tri Widia Pangestu', 'Intan Shabrina Hidayat',
                'Tarisa Ayu Bimantari', 'Komang Cindy Puspita Dewi', 'Qonitaturrahmah Rosadi',
                'I Gusti Ngurah Bagus Vivekananda', 'Bifta Khusnul Huwaida', 'I Kadek Rico Wirastika Dana'
            ], 'Bidang Kesejahteraan Mahasiswa', 'kesma', 'yellow'),

            // BIDANG PENGMAS - Oranye (Orange)
            ['name' => 'Komang Intan Ananda Yasdiana', 'position' => 'Kepala Bidang', 'division' => 'Bidang Pengabdian Masyarakat', 'division_code' => 'pengmas', 'color_theme' => 'orange', 'order_level' => 3],
            ['name' => 'Prameswari Putri Azmi', 'position' => 'Sekretaris Bidang', 'division' => 'Bidang Pengabdian Masyarakat', 'division_code' => 'pengmas', 'color_theme' => 'orange', 'order_level' => 4],
            ...$this->mapAnggota([
                'I Gusti Agung Ayu Shinta Aulia Kusuma Putri', 'Shafira Nazwa Aura Sandi', 'Menida Honora Arwen',
                'Komang Mayda Tri Lestari', 'Putu Abhi Agastya', 'I Gusti Ayu Praba Mayani',
                'Made Maitry Asrithya Dewi', 'I Gusti Agung Ayu Dyah Maharani', 'Sahilatul Maqsudah',
                'Ketut Risa Andayani', 'I Wayan Prasetya Darmayasa'
            ], 'Bidang Pengabdian Masyarakat', 'pengmas', 'orange'),

            // BIDANG KOMNASINFO - Biru Muda (Sky)
            ['name' => 'Nafisah Ilmi Handayani', 'position' => 'Kepala Bidang', 'division' => 'Bidang Komnasinfo', 'division_code' => 'komnasinfo', 'color_theme' => 'sky', 'order_level' => 3],
            ['name' => 'I Gede Arya Krisnanda Sutasoma', 'position' => 'Sekretaris Bidang', 'division' => 'Bidang Komnasinfo', 'division_code' => 'komnasinfo', 'color_theme' => 'sky', 'order_level' => 4],
            ...$this->mapAnggota([
                'I Wayan Natha Wiguna', 'Zahra Ramadhani Ahmad', 'William Troy Geavin Liem',
                'Dewa Ayu Nanda Pratiwi', 'Muhammad Alvin Latahzan', 'NM. Arkia Mahadewi Abhivandini Tangkas',
                'Dewa Ayu Ary Indah Maharani', 'Komang Davin Guswina Merta', 'Ni Made Tara Svanendri Mahadewi Suputra'
            ], 'Bidang Komnasinfo', 'komnasinfo', 'sky'),

            // BIDANG INTEKS - Coklat (Amber - paling mendekati di Tailwind)
            ['name' => 'Ketut Sindy Dewantari', 'position' => 'Kepala Bidang', 'division' => 'Bidang Inteks', 'division_code' => 'inteks', 'color_theme' => 'amber', 'order_level' => 3],
            ['name' => 'Silvia Sekar Malikha', 'position' => 'Sekretaris Bidang', 'division' => 'Bidang Inteks', 'division_code' => 'inteks', 'color_theme' => 'amber', 'order_level' => 4],
            ...$this->mapAnggota([
                'Desta Carolin Manao', 'Keishia Angelica Salim', 'Putu Bagus Pranava Githananda',
                'Komang Wahyu Pramana Sanjaya', 'I Kadek Giriana Arwiwa Dinata', 'Ni Made Divasya Varta',
                'Kadek Maharani Putri', 'Ida Ayu Narasvari Sanjivani Singarsa', 'Ni Made Aiswarama Uttamaningdyah'
            ], 'Bidang Inteks', 'inteks', 'amber'),

            // BIDANG PRODANUS - Hijau (Green)
            ['name' => 'Achmad Nur Faizal Ghozi', 'position' => 'Kepala Bidang', 'division' => 'Bidang Prodanus', 'division_code' => 'prodanus', 'color_theme' => 'green', 'order_level' => 3],
            ['name' => 'Amalia Sholikah', 'position' => 'Sekretaris Bidang', 'division' => 'Bidang Prodanus', 'division_code' => 'prodanus', 'color_theme' => 'green', 'order_level' => 4],
            ...$this->mapAnggota([
                'Desak Nyoman Mirah Pratiwi', 'Arina Sabilal Haq', 'Anas Fadhill Mubarok',
                'Sri Narendra Parikesit Satria Bagaskara', 'I Gede Agus Mahadhika Prana Putra', 'Anna Puspita Ramdani',
                'Mazna Sofya Dia Resti', 'Khusnul Azizah'
            ], 'Bidang Prodanus', 'prodanus', 'green'),
        ];

        foreach ($data as $item) {
            Structure::create($item);
        }
    }

    private function mapAnggota($names, $division, $code, $color) {
        return array_map(function($name) use ($division, $code, $color) {
            return [
                'name' => $name,
                'position' => 'Staff Bidang', // Ubah jadi Staff agar seragam
                'division' => $division,
                'division_code' => $code,
                'color_theme' => $color,
                'order_level' => 5
            ];
        }, $names);
    }
}
