# 📝 Project Roadmap & TODO List - HMJ Kedokteran Undiksha

Selamat datang di repositori pengembangan web HMJ Kedokteran! Dokumen ini berisi panduan fitur yang harus diselesaikan, prioritas pengembangan, dan status pengerjaan.

## 🛠 Tech Stack Reminder
* **Framework:** Laravel 12 + Livewire 4
* **UI Library:** Flux UI & Tailwind CSS v4
* **Admin Panel:** Filament v5
* **Database:** MySQL

---

## 📌 Legenda Prioritas
* `[Done]` : Sudah selesai & Production Ready.
* `**` : **High Priority** (Wajib ada saat peluncuran awal).
* `*` : **Medium Priority** (Fitur pendukung, dikerjakan setelah core selesai).
* `-` : **Low Priority** (Pelengkap).

---

## 1. Core & Layout (Foundation)
Bagian ini adalah kerangka dasar aplikasi.
- [x] **Setup Project & Environment** (Laravel 12 + Sail)
- [x] **Setup Filament Admin Panel**
- [x] **Global Footer** (Responsif & Data Statis)
- [x] **Global Navbar** (Sticky, Mobile Menu, Dark Mode, Logic Active State)
- [ ] *Livewire smooth navigating system

---

## 2. Backend & Database Structure (System)
Sebelum mengerjakan Frontend dinamis, kita perlu menyiapkan "wadah" datanya terlebih dahulu di Database dan Filament Resource agar Admin bisa menginput data.

** Infosphere Data **
- [ ] ** Migrasi & Model: `Department` (Bidang)
    - *Fields: name, description, icon, color, vision/mission.*
- [ ] ** Migrasi & Model: `Member` (Anggota)
    - *Fields: name, nim, position (Ketua/Sekretaris/Anggota), photo, instagram_link, linkedin_link, bio.*
- [ ] ** Filament Resource: CRUD untuk Bidang & Anggota.

** Event & Program Data **
- [ ] ** Migrasi & Model: `Event` (Agenda)
    - *Fields: title, date, location, description, is_upcoming (boolean).*
- [ ] * Migrasi & Model: `WorkProgram` (Proker)
    - *Fields: name, status (Terlaksana/Belum), description, documentation_gallery.*

---

## 3. Landing Page (Frontend)
Fokus: *First Impression* pengunjung.
*File: `resources/views/welcome.blade.php`*

- [1/2] ** **Hero Section Beranimasi**
    - *Task:* Implementasi animasi halus (fade-in/slide) pada teks sambutan dan gambar latar. Pastikan *mobile-friendly*.
- [ ] ** **Upcoming Event Widget**
    - *Task:* Component Livewire untuk menampilkan 3 agenda terdekat dari database `events`.
- [ ] ** **Kalender Kerja (Interactive)**
    - *Task:* Tampilan kalender sederhana yang men-highlight tanggal-tanggal penting organisasi.
    - *Note:* Bisa menggunakan library Alpine.js atau Livewire Calendar.

---

## 4. Infosphere (Pusat Informasi)
Fokus: Visualisasi data organisasi yang informatif.
*File: `resources/views/infosphere.blade.php` (Prototype sudah ada)*

- [ ] ** **Integrasi Database ke View**
    - *Task:* Mengganti Array PHP statis di `infosphere.blade.php` dengan query Eloquent dari Model `Department` dan `Member`.
- [ ] ** **Struktur Hirarki (Tree Visual)**
    - *Task:* Pastikan visualisasi pohon jabatan (BPH Inti) ter-render rapi dari data database.
- [ ] ** **Halaman Detail Bidang**
    - *Task:* Saat user klik ikon bidang, tampilkan modal atau halaman detail berisi Visi, Misi, dan Proker bidang tersebut.
- [ ] ** **Halaman Profil Anggota**
    - *Task:* Halaman/Modal detail untuk setiap anggota (Foto Besar, Bio Singkat, Tautan Sosmed).
    - *Route:* `/infosphere/member/{nim}` atau modal pop-up.

---

## 5. Modul Tambahan (Features)
Fitur pendukung untuk kelengkapan informasi.

- [ ] * **Halaman Program Kerja (Proker)**
    - *Task:* Daftar list proker satu periode kepengurusan dengan status terlaksana/belum.
- [ ] * **Merchandise Catalog**
    - *Task:* Tampilan grid sederhana untuk produk Danus (Baju, Stiker, dll). Cukup katalog *view-only* dengan tombol "Pesan via WA".
- [ ] * **Social Media Hub**
    - *Task:* Section yang menampilkan feed Instagram terbaru atau tautan cepat ke TikTok/YouTube HMJ.
- [ ] * **Contact Me / Aspirasi**
    - *Task:* Form sederhana (Livewire) untuk mahasiswa mengirim pesan/kritik saran yang masuk ke database Admin.

---

## 🚫 Out of Scope (Tidak Dikerjakan)
Fitur ini diputuskan untuk **ditiadakan** berdasarkan rapat pimpinan.
- [ ] **Modul Berita / News Blog** (Redundant dengan Instagram).

---

## 💡 Catatan untuk Developer
1.  **Strictly Typed:** Gunakan fitur PHP 8.3 type hinting pada Controller dan Model.
2.  **Tailwind v4:** Konfigurasi warna (`hmj-purple`, `hmj-gold`) ada di file CSS langsung (`app.css`), bukan di `tailwind.config.js`.
3.  **UI Consistency:** Gunakan komponen `Flux UI` untuk elemen interaktif (Button, Modal, Input) agar desain konsisten.
4.  **Responsiveness:** Selalu cek tampilan di Mobile view (inspeksi browser) setiap kali menyelesaikan fitur.

*Semangat Coding! 🚀*
