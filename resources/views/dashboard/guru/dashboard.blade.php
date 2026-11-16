@extends('layouts.guru')

@section('title', 'SIPELTA | Dashboard Guru')

@section('content')
    <div class="guru-page-heading">
        <div>
            <div class="guru-date-line"><span>RABU, 11 MARET 2026</span><span>Tahun Ajaran 2025/2026 Genap</span></div>
            <h1>Selamat datang, Bu Rina Marlina, S.Pd.</h1>
            <p>Guru Bimbingan Konseling &amp; Koordinator Tim Tata Tertib Harian</p>
        </div>
        <div class="guru-duty-card"><span class="guru-icon-tile">▣</span><div><small>STATUS TUGAS AKTIF</small><strong>Piket Shift Pagi (06:45 - 12:30 WIB)</strong></div><div><small>POS PENGAWASAN</small><strong>Gerbang Barat &amp; Lobi BK</strong></div></div>
    </div>

    <section class="guru-stat-grid">
        <article class="guru-stat-card"><div class="guru-stat-title">Keterlambatan Hari Ini <span>◷</span></div><strong>14 <small>Siswa</small></strong><p>◉ Tercatat di Pos Gerbang Barat</p></article>
        <article class="guru-stat-card"><div class="guru-stat-title">Pemeriksaan Barang Hari Ini <span>▤</span></div><strong>6 <small>Siswa</small></strong><p>2 HP disita · 4 aksesori</p></article>
        <article class="guru-stat-card guru-stat-warning"><div class="guru-stat-title">Prioritas Tindakan <span>!</span></div><strong>5 <small>Laporan Temuan</small></strong><p>Butuh validasi Guru BK hari ini</p></article>
        <article class="guru-stat-card"><div class="guru-stat-title">Barang Sitaan Belum Diambil <span>♙</span></div><strong>8 <small>Barang</small></strong><p>Tersimpan aman di loker BK</p></article>
    </section>

    <div class="guru-section-heading"><h2>⚡ Aksi Cepat Guru Piket</h2><span>Operasi cepat penegakan tata tertib</span></div>
    <section class="guru-action-grid">
        <a class="guru-action-card" href="{{ route('guru.page', 'catat-keterlambatan') }}"><span class="guru-icon-tile">◷</span><h3>Catat Keterlambatan</h3><p>Input keterlambatan siswa di gerbang secara instan lewat NISN atau nama lengkap.</p><strong>Buka Formulir →</strong></a>
        <a class="guru-action-card" href="{{ route('guru.page', 'periksa-barang') }}"><span class="guru-icon-tile">⚒</span><h3>Periksa Barang Bawaan</h3><p>Pencatatan sitaan smartphone saat KBM, rokok elektrik, atau atribut non-standar.</p><strong>Mulai Pemeriksaan →</strong></a>
        <a class="guru-action-card guru-action-alert" href="{{ route('guru.page', 'verifikasi-laporan') }}"><span class="guru-icon-tile">♢</span><h3>Verifikasi Laporan</h3><p>Validasi laporan temuan dari tim OSIS sebelum masuk perhitungan poin resmi BK.</p><strong>Tinjau Laporan (5) →</strong></a>
    </section>

    <section class="guru-dashboard-columns">
        <article class="guru-panel">
            <div class="guru-panel-heading"><div><h2>Laporan Menunggu Verifikasi</h2><p>Harap tinjau bukti foto dan tentukan status penanganan poin tertib.</p></div><a class="guru-button guru-button-primary" href="{{ route('guru.page', 'verifikasi-laporan') }}">☷ Verifikasi Semua</a></div>
            <div class="guru-table-wrap">
                <table class="guru-table" data-filter-table>
                    <thead><tr><th>Waktu</th><th>Pelapor</th><th>Siswa Terlapor</th><th>Kelas</th><th>Jenis Pelanggaran</th><th>Aksi</th></tr></thead>
                    <tbody>
                        <tr><td>07:15</td><td>Kevin Pratama <small>OSIS Kedisiplinan</small></td><td>Rizki Pratama</td><td>XI IPA 2</td><td>Seragam tidak rapi</td><td><button class="guru-text-button" data-toast="Bukti laporan Rizki Pratama siap ditinjau.">Lihat</button></td></tr>
                        <tr><td>07:22</td><td>Aulia Rahma <small>OSIS Kedisiplinan</small></td><td>Dimas Aditya</td><td>XI IPS 1</td><td>Tidak memakai dasi</td><td><button class="guru-text-button" data-toast="Bukti laporan Dimas Aditya siap ditinjau.">Lihat</button></td></tr>
                        <tr><td>07:35</td><td>Siti Rahma <small>OSIS Kedisiplinan</small></td><td>Nadia Putri Lestari</td><td>X-1</td><td>Kaos kaki pendek</td><td><button class="guru-text-button" data-toast="Bukti laporan Nadia Putri Lestari siap ditinjau.">Lihat</button></td></tr>
                        <tr><td>08:10</td><td>Budi Santoso <small>Guru Piket</small></td><td>Aldi Firmansyah</td><td>X-3</td><td>Barang bawaan</td><td><button class="guru-text-button" data-toast="Bukti laporan Aldi Firmansyah siap ditinjau.">Lihat</button></td></tr>
                    </tbody>
                </table>
            </div>
            <a class="guru-panel-link" href="{{ route('guru.page', 'verifikasi-laporan') }}">Buka antrean lengkap →</a>
        </article>
        <aside class="guru-panel guru-activity-panel">
            <div class="guru-panel-heading"><h2>◷ Aktivitas Saya Hari Ini</h2><span class="guru-live-dot"></span></div>
            <ul class="guru-timeline">
                <li><time>08:15 WIB</time><strong>Dispensasi</strong><p>Menyetujui dispensasi keterlambatan siswa Ahmad Fauzi.</p></li>
                <li><time>07:45 WIB</time><strong>Penyitaan</strong><p>Mengamankan 1 vape pod milik siswa kelas XI IPS 3.</p></li>
                <li><time>07:10 WIB</time><strong>Presensi Piket</strong><p>Membuka pos pengawasan gerbang utama bersama petugas.</p></li>
            </ul>
            <a class="guru-help-link" href="{{ route('guru.page', 'riwayat-pelanggaran') }}">ⓘ Butuh bantuan tata tertib? Hubungi Koordinator BK</a>
        </aside>
    </section>
@endsection
