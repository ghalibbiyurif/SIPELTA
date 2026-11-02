<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPELTA | Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="login-body">
    <div class="login-screen">
        <section class="login-hero">
            <div class="hero-inner">
                <div class="portal-brand">
                    <div class="portal-mark">S</div>
                    <div class="portal-copy">
                        <div class="portal-label">PORTAL</div>
                        <div class="portal-school">RESMI</div>
                        <div class="portal-name">SMAN 1 CILEUNYI</div>
                        <div class="portal-city">Kabupaten Bandung, Jawa Barat</div>
                    </div>
                </div>

                <div class="hero-badge">
                    <span class="badge-icon">◔</span>
                    <span>Aplikasi Manajemen Tata Tertib Terpadu</span>
                </div>

                <h1>SIPELTA</h1>
                <p class="hero-subtitle">Sistem Pencatatan Pelanggaran Tata Tertib Siswa</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <span class="feature-icon">◫</span>
                        <div>
                            <strong>Pencatatan Lebih Terstruktur</strong>
                            <small>Input digital pelanggaran, keterlambatan, dan penyitaan barang secara real-time.</small>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">◌</span>
                        <div>
                            <strong>Verifikasi Laporan Berjenjang</strong>
                            <small>Untuk validasi data dan monitoring siswa secara terintegrasi.</small>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">◍</span>
                        <div>
                            <strong>Analisis Tren Pelanggaran</strong>
                            <small>Dashboard statistik per kelas dan jenis pelanggaran untuk pengambilan keputusan.</small>
                        </div>
                    </div>
                </div>

                <div class="hero-footer">
                    <span class="status-dot"></span>
                    <span>Sistem Aktif &amp; Terintegrasi</span>
                    <span class="footer-separator"></span>
                    <span>2025/2026</span>
                </div>
            </div>
        </section>

        <section class="login-panel">
            <div class="login-card">
                <h2>Masuk ke Akun Anda</h2>
                <p>Silakan masukkan kredensial terdaftar untuk mengakses sistem SIPELTA.</p>

                <form class="login-form">
                    <label>Email / Username</label>
                    <div class="field">
                        <span class="field-icon">◌</span>
                        <input type="text" value="guru.piket@sman1cileunyi.sch.id" aria-label="Email atau username">
                    </div>

                    <label>Kata Sandi</label>
                    <div class="field password-field">
                        <span class="field-icon">◍</span>
                        <input type="password" value="********" aria-label="Kata sandi">
                        <span class="eye">◉</span>
                    </div>

                    <div class="form-row">
                        <label class="checkbox-row"><input type="checkbox" checked> <span>Ingat saya</span></label>
                        <a href="#">Lupa kata sandi?</a>
                    </div>

                    <button type="button" class="primary-btn" onclick="window.location.href='/admin'">Masuk <span>→</span></button>
                </form>

                <div class="role-switcher">
                    <span>Login sebagai</span>
                    <div class="pill-group">
                        <button>Admin</button>
                        <button>Guru</button>
                        <button>OSI</button>
                    </div>
                </div>

                <div class="info-box">
                    <span class="info-icon">i</span>
                    <p>Akses sesuai peran: Admin, Guru, dan OSIS. Hubungi admin sekolah jika belum memiliki akun atau mengalami kendala login.</p>
                </div>

                <div class="contact-row">
                    <div class="contact-item">
                        <span>☎</span>
                        <span>(022) 779-</span>
                    </div>
                    <div class="contact-item">
                        <span>✉</span>
                        <span>it@sman1cileunyi.sch.id</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
