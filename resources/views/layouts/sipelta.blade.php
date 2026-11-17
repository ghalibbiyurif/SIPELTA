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
                <a href="{{ route('admin.dashboard') }}" class="nav-item{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}">
                    <span class="nav-icon">▣</span>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.trends') }}" class="nav-item{{ request()->routeIs('admin.trends') ? ' active' : '' }}">
                    <span class="nav-icon">◈</span>
                    <span>Tren Pelanggaran</span>
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

            <a href="{{ route('login') }}" class="sidebar-user" aria-label="Kembali ke halaman login untuk memilih peran">
                <span class="user-avatar">A</span>
                <span class="sidebar-user-identity">
                    <span class="user-name">Kembali ke Login</span>
                    <span class="user-role">Pilih peran: Admin</span>
                </span>
                <span aria-hidden="true">↪</span>
            </a>
        </aside>

        <main class="sipelta-page">
            @yield('content')
        </main>
    </div>
</body>
</html>
