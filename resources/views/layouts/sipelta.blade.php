<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIPELTA')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="sipelta-body">
    <div class="sipelta-shell">
        <aside class="sipelta-sidebar">
            <div class="brand-box">
                <div class="brand-mark">S</div>
                <div class="brand-text">
                    <div class="brand-name">SIPELTA</div>
                    <div class="brand-sub">SMAN 1 CILEUNYI</div>
                </div>
            </div>

            <nav class="side-nav">
                <div class="nav-label">Menu utama</div>
                <a href="/admin" class="nav-item active">
                    <span class="nav-icon">▣</span>
                    <span>Dashboard</span>
                </a>
                <a href="/guru" class="nav-item">
                    <span class="nav-icon">◫</span>
                    <span>Catat Keterlambatan</span>
                </a>
                <a href="/data-master" class="nav-item">
                    <span class="nav-icon">◌</span>
                    <span>Periksa Barang Bawaan</span>
                </a>
                <a href="/admin" class="nav-item">
                    <span class="nav-icon">◈</span>
                    <span>Verifikasi Laporan</span>
                </a>
                <a href="/admin" class="nav-item">
                    <span class="nav-icon">◍</span>
                    <span>Riwayat Pelanggaran</span>
                </a>
                <a href="/data-master" class="nav-item">
                    <span class="nav-icon">◎</span>
                    <span>Kelola Data Master</span>
                </a>
                <a href="/admin" class="nav-item">
                    <span class="nav-icon">◉</span>
                    <span>Pengaturan</span>
                </a>
            </nav>

            <div class="sidebar-user">
                <div class="user-avatar">B</div>
                <div>
                    <div class="user-name">Bu Rina Marlina, S.Pd.</div>
                    <div class="user-role">GURU / BK</div>
                </div>
            </div>
        </aside>

        <main class="sipelta-page">
            @yield('content')
        </main>
    </div>
</body>
</html>
