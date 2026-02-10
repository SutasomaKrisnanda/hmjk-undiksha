<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt; // 1. Wajib import ini

// ----------------------------------------------------------------------
// PUBLIC ROUTES (Frontend)
// ----------------------------------------------------------------------

// A. Home Page
// Lokasi file: resources/views/livewire/home/index.blade.php
Volt::route('/', 'home.index')->name('home');

// B. Struktur Organisasi (Halaman Utama Infosphere yang baru)
// Lokasi file: resources/views/livewire/infosphere/structure.blade.php
Volt::route('/struktur', 'infosphere.structure')
    ->name('structure.index');

// C. Detail Bidang/Departemen
// Lokasi file: resources/views/livewire/infosphere/department-detail.blade.php
Volt::route('/bidang/{code}', 'infosphere.department-detail')
    ->name('department.show');


// ----------------------------------------------------------------------
// PROTECTED ROUTES (Backend/Dashboard)
// ----------------------------------------------------------------------

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__ . '/settings.php';
