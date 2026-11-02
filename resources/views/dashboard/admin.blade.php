@extends('layouts.sipelta')

@section('title', 'SIPELTA | Dashboard Admin')

@section('content')
    <div class="page-topbar">
        <div class="page-meta">
            <span class="eyebrow">SIPELTA / Administrasi / Dashboard</span>
            <h2>Selamat datang, Admin</h2>
        </div>
        <div class="top-actions">
            <button class="ghost-btn">Lihat Tren</button>
            <button class="ghost-btn">Export Laporan</button>
        </div>
    </div>

    <section class="stats-grid">
        <article class="stat-card highlight">
            <div class="stat-heading">
                <span class="label">Total Pelanggaran</span>
                <span class="badge badge-blue">128</span>
            </div>
            <div class="stat-value">128</div>
            <div class="stat-meta">Khusus siswa aktif pada periode ini</div>
        </article>

        <article class="stat-card">
            <div class="stat-heading">
                <span class="label">Terlambat Hari Ini</span>
                <span class="badge badge-muted">9</span>
            </div>
            <div class="stat-value">9</div>
            <div class="stat-meta">4 masuk kelas, 5 di luar jam</div>
        </article>

        <article class="stat-card">
            <div class="stat-heading">
                <span class="label">Barang Sitaan</span>
                <span class="badge badge-gold">14</span>
            </div>
            <div class="stat-value">14</div>
            <div class="stat-meta">3 barang belum diambil</div>
        </article>

        <article class="stat-card">
            <div class="stat-heading">
                <span class="label">Menunggu Verifikasi</span>
                <span class="badge badge-red">6</span>
            </div>
            <div class="stat-value">6</div>
            <div class="stat-meta">Laporan belum disetujui</div>
        </article>
    </section>

    <section class="chart-panel split-panel">
        <div class="panel-header">
            <div>
                <h3>Tren Pelanggaran 6 Bulan Terakhir</h3>
                <small>Oktober 2025 - Maret 2026</small>
            </div>
            <div class="legend">
                <span><i class="line red"></i> Tertib</span>
                <span><i class="line blue"></i> Kerapihan</span>
            </div>
        </div>
        <div class="chart-box">
            <div class="chart-lines">
                <span class="grid-line"></span>
                <span class="grid-line"></span>
                <span class="grid-line"></span>
                <span class="grid-line"></span>
            </div>
            <div class="chart-svg">
                <svg viewBox="0 0 480 170" preserveAspectRatio="none">
                    <path d="M0 120 C40 80, 90 140, 120 110 S200 90, 220 110 S300 40, 350 75 S420 100, 480 60" fill="none" stroke="#255ec4" stroke-width="3"/>
                    <path d="M0 100 C60 150, 120 120, 170 110 S260 130, 300 90 S390 65, 480 90" fill="none" stroke="#ef5b6f" stroke-width="3"/>
                </svg>
            </div>
            <div class="chart-labels">
                <span>Okt</span>
                <span>Nov</span>
                <span>Des</span>
                <span>Jan</span>
                <span>Feb</span>
                <span>Mar</span>
            </div>
        </div>
    </section>

    <section class="dashboard-grid">
        <article class="mini-panel">
            <div class="mini-header">
                <h3>Top 5 Kelas Terbanyak Kasus</h3>
                <span>Akumulasi</span>
            </div>
            <div class="bar-list">
                <div class="bar-item">
                    <span>XII IPA 2</span>
                    <div class="bar-track"><i style="width: 72%"></i></div>
                    <strong>20</strong>
                </div>
                <div class="bar-item">
                    <span>XII IPS 1</span>
                    <div class="bar-track"><i style="width: 60%"></i></div>
                    <strong>16</strong>
                </div>
                <div class="bar-item">
                    <span>X-4</span>
                    <div class="bar-track"><i style="width: 52%"></i></div>
                    <strong>15</strong>
                </div>
                <div class="bar-item">
                    <span>X-3</span>
                    <div class="bar-track"><i style="width: 40%"></i></div>
                    <strong>12</strong>
                </div>
            </div>
        </article>

        <article class="mini-panel">
            <div class="mini-header">
                <h3>Siswa Berisiko Poin Tinggi</h3>
                <span>Aktif SP</span>
            </div>
            <ul class="student-risk-list">
                <li><span class="avatar blue">DA</span><div><strong>Dimas Aditya</strong><small>XI IPS 1</small></div><span class="pill danger">SP 1</span></li>
                <li><span class="avatar red">RP</span><div><strong>Rizki Pratama</strong><small>XI IPA 2</small></div><span class="pill warning">SP 2</span></li>
                <li><span class="avatar green">FN</span><div><strong>Fajar Nugraha</strong><small>X-4</small></div><span class="pill warning">SP 1</span></li>
                <li><span class="avatar purple">NP</span><div><strong>Nadia Putri</strong><small>X-1</small></div><span class="pill info">15 Poin</span></li>
            </ul>
        </article>
    </section>

    <section class="table-panel">
        <div class="table-header">
            <h3>Pelanggaran Terbaru</h3>
            <div class="table-tools">
                <input type="text" placeholder="Filter nama / NIS...">
                <select><option>Semua Status</option></select>
                <button class="primary-btn small">Lihat Semua</button>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Kategori Pelanggaran</th>
                    <th>Poin</th>
                    <th>Dicatat Oleh</th>
                    <th>Status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>11 Mar 2026<br><small>07:15 WIB</small></td>
                    <td>Rizki Pratama</td>
                    <td>XI IPA 2</td>
                    <td>Terlambat</td>
                    <td>10</td>
                    <td>Guru BK</td>
                    <td><span class="status pending">Menunggu</span></td>
                    <td>👁</td>
                </tr>
                <tr>
                    <td>11 Mar 2026<br><small>07:22 WIB</small></td>
                    <td>Dimas Aditya</td>
                    <td>XI IPS 1</td>
                    <td>Kerapihan Seragam</td>
                    <td>15</td>
                    <td>Guru BK</td>
                    <td><span class="status verified">Terverifikasi</span></td>
                    <td>👁</td>
                </tr>
                <tr>
                    <td>10 Mar 2026<br><small>12:40 WIB</small></td>
                    <td>Nadia Putri</td>
                    <td>X-1</td>
                    <td>Barang Bawaan</td>
                    <td>5</td>
                    <td>Wali Kelas</td>
                    <td><span class="status verified">Terverifikasi</span></td>
                    <td>👁</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="activity-panel">
        <h3>Aktivitas &amp; Log Sistem Terakhir</h3>
        <ul>
            <li><span class="dot blue"></span> <strong>Rina (Guru BK)</strong> memverifikasi laporan keterlambatan siswa XI IPA 2.</li>
            <li><span class="dot red"></span> <strong>Silvi (OSIS)</strong> mencatat 3 laporan barang bawaan siswa kelas XI IPS.</li>
            <li><span class="dot amber"></span> <strong>Admin</strong> memperbarui data kelas dan roster wali kelas.</li>
            <li><span class="dot green"></span> <strong>Sistem</strong> menghasilkan laporan tren pelanggaran bulan ini.</li>
        </ul>
    </section>
@endsection
