<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIPELTA | Panel Guru')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="sipelta-body guru-app">
    <div class="guru-shell">
        <aside class="guru-sidebar">
            <a class="brand-box" href="{{ route('guru.dashboard') }}">
                <span class="brand-mark">S</span>
                <span class="brand-text">
                    <span class="brand-name">SIPELTA</span>
                    <span class="brand-sub">SMAN 1 CILEUNYI</span>
                </span>
            </a>

            <nav class="guru-nav" aria-label="Menu utama Guru">
                <span class="nav-label">Menu utama</span>
                <a href="{{ route('guru.dashboard') }}" @class(['guru-nav-item', 'active' => request()->routeIs('guru.dashboard')])>
                    <span class="nav-icon">▦</span><span>Dashboard</span>
                </a>
                <a href="{{ route('guru.page', 'catat-keterlambatan') }}" @class(['guru-nav-item', 'active' => request()->route('page') === 'catat-keterlambatan'])>
                    <span class="nav-icon">◷</span><span>Catat Keterlambatan</span>
                </a>
                <a href="{{ route('guru.page', 'periksa-barang') }}" @class(['guru-nav-item', 'active' => request()->route('page') === 'periksa-barang'])>
                    <span class="nav-icon">▤</span><span>Periksa Barang Bawaan</span>
                </a>
                <a href="{{ route('guru.page', 'verifikasi-laporan') }}" @class(['guru-nav-item', 'active' => request()->route('page') === 'verifikasi-laporan'])>
                    <span class="nav-icon">☷</span><span>Verifikasi Laporan</span>
                </a>
                <a href="{{ route('guru.page', 'riwayat-pelanggaran') }}" @class(['guru-nav-item', 'active' => request()->route('page') === 'riwayat-pelanggaran'])>
                    <span class="nav-icon">▧</span><span>Riwayat Pelanggaran</span>
                </a>
            </nav>

            <a href="{{ route('login') }}" class="guru-sidebar-user" aria-label="Kembali ke halaman login">
                <span class="user-avatar">R</span>
                <span class="guru-sidebar-identity">
                    <strong>Bu Rina Marlina, S.Pd.</strong>
                    <small>GURU / BK</small>
                </span>
                <span aria-hidden="true">↪</span>
            </a>
        </aside>

        <div class="guru-workspace">
            <header class="guru-topbar">
                <div class="guru-breadcrumb"><span>SIPELTA</span><span>›</span><span>Kedisiplinan</span><span>›</span><strong>Panel Guru</strong></div>
                <label class="guru-global-search">
                    <span aria-hidden="true">⌕</span>
                    <input type="search" placeholder="Cari NIS, siswa, atau kelas..." data-table-search>
                </label>
                <button class="guru-icon-button" type="button" aria-label="Notifikasi" data-toast="Belum ada notifikasi baru.">♧<i></i></button>
                <div class="guru-profile"><strong>Bu Rina Marlina, S.Pd.</strong><small>GURU / GURU BK</small></div>
                <span class="guru-profile-avatar">R</span>
            </header>

            <main class="guru-content">
                @yield('content')
            </main>
            <footer class="guru-footer">
                <span>SIPELTA © 2026 SMAN 1 Cileunyi. Sistem Informasi Penegakan Disiplin dan Tata Tertib.</span>
                <span>v2.4.0 Institutional</span>
            </footer>
        </div>
    </div>
    <div class="guru-toast" role="status" aria-live="polite" data-toast-region></div>
</body>
</html>
