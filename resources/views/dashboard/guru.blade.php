@extends('layouts.sipelta')

@section('title', 'SIPELTA | Dashboard Guru')

@section('content')
    <div class="page-topbar page-topbar-compact">
        <div class="page-meta">
            <span class="eyebrow">SIPELTA / Dashboard / Guru</span>
            <h2>Selamat datang, Bu Rina Marlina, S.Pd.</h2>
        </div>
        <div class="profile-mini">
            <span class="status-pill">Status aktif</span>
            <div class="user-box">
                <div class="user-avatar small">R</div>
                <div>
                    <strong>Bu Rina Marlina, S.Pd.</strong>
                    <small>Guru / BK</small>
                </div>
            </div>
        </div>
    </div>

    <section class="summary-cards guru-summary">
        <div class="summary-item">
            <div class="summary-label">Keterlambatan Hari Ini</div>
            <div class="summary-value">14</div>
            <small>6 siswa dari kelas XI</small>
        </div>
        <div class="summary-item">
            <div class="summary-label">Pemeriksaan Barang</div>
            <div class="summary-value">6</div>
            <small>2 barang disita</small>
        </div>
        <div class="summary-item highlight-item">
            <div class="summary-label">Prioritas</div>
            <div class="summary-value">5</div>
            <small>Laporan menunggu</small>
        </div>
        <div class="summary-item">
            <div class="summary-label">Barang Sitaan</div>
            <div class="summary-value">8</div>
            <small>Belum diambil</small>
        </div>
    </section>

    <section class="action-grid">
        <div class="action-card">
            <div class="action-icon">◔</div>
            <div>
                <h4>Catat Keterlambatan</h4>
                <p>Input keterlambatan siswa dengan data lengkap.</p>
            </div>
            <button class="action-btn">Buka Formulir</button>
        </div>
        <div class="action-card">
            <div class="action-icon">◌</div>
            <div>
                <h4>Periksa Barang Bawaan</h4>
                <p>Pencatatan barang dan tindakan sesuai aturan.</p>
            </div>
            <button class="action-btn">Mulai Pemeriksaan</button>
        </div>
        <div class="action-card">
            <div class="action-icon">◍</div>
            <div>
                <h4>Verifikasi Laporan</h4>
                <p>Validasi laporan dan tindak lanjut ke wali kelas.</p>
            </div>
            <button class="action-btn">Tinjau Laporan</button>
        </div>
    </section>

    <section class="split-layout">
        <div class="panel-box panel-large">
            <div class="panel-header compact-header">
                <h3>Laporan Menunggu Verifikasi</h3>
                <button class="secondary-btn">Filter</button>
            </div>

            <table class="teacher-table">
                <thead>
                    <tr>
                        <th>Waktu</th>
                        <th>Pelapor</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jenis</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>07:15</td>
                        <td>Kevin Pratama</td>
                        <td>Rizki Pratama</td>
                        <td>XI IPA 2</td>
                        <td>Seragam Tidak Rapi</td>
                        <td><span class="status pending">Menunggu</span></td>
                    </tr>
                    <tr>
                        <td>07:22</td>
                        <td>Aulia Rahma</td>
                        <td>Dimas Aditya</td>
                        <td>XI IPS 1</td>
                        <td>Keterlambatan</td>
                        <td><span class="status pending">Menunggu</span></td>
                    </tr>
                    <tr>
                        <td>07:35</td>
                        <td>Siti Rahma</td>
                        <td>Nadia Putri</td>
                        <td>X-1</td>
                        <td>Barang Bawaan</td>
                        <td><span class="status verified">Terverifikasi</span></td>
                    </tr>
                    <tr>
                        <td>08:10</td>
                        <td>Budi Santoso</td>
                        <td>Aldi Firmansyah</td>
                        <td>X-3</td>
                        <td>Barang Bawaan</td>
                        <td><span class="status verified">Terverifikasi</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="panel-box right-panel">
            <div class="panel-header compact-header">
                <h3>Aktivitas Saya Hari Ini</h3>
                <span class="dot-live"></span>
            </div>
            <ul class="timeline-list">
                <li><span class="time">08:15 WIB</span><div><strong>Dispensasi</strong><small>Menyetujui dispensasi keterlambatan siswa Ahmad Fauzi.</small></div></li>
                <li><span class="time">07:45 WIB</span><div><strong>Penilaian</strong><small>Memeriksa 1 laporan keterlambatan masuk kelas X-3.</small></div></li>
                <li><span class="time">07:10 WIB</span><div><strong>Presensi</strong><small>Membuka data absensi untuk kelas XI IPS 1.</small></div></li>
                <li><span class="time">06:45 WIB</span><div><strong>Konseling</strong><small>Menangani siswa yang mengalami kesulitan belajar.</small></div></li>
            </ul>
            <div class="note-box">
                <span class="note-icon">✎</span>
                <input type="text" value="Hubungi koordinasi Tata Tertib...">
            </div>
        </div>
    </section>
@endsection
