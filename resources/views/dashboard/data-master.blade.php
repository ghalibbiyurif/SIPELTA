@extends('layouts.sipelta')

@section('title', 'SIPELTA | Data Master')

@section('content')
    <div class="page-topbar page-topbar-spread">
        <div class="page-meta">
            <span class="eyebrow">SIPELTA / Administrasi / Kelola Data Master</span>
            <h2>Kelola Data Master &amp; Konfigurasi Sistem</h2>
        </div>
        <div class="top-actions top-actions-right">
            <button class="soft-btn">+ Tambah Siswa</button>
        </div>
    </div>

    <section class="overview-row">
        <div class="mini-summary"><span>Pengguna</span><strong>42 Akun</strong></div>
        <div class="mini-summary"><span>Rombel</span><strong>42 Kelas</strong></div>
        <div class="mini-summary"><span>Data Siswa</span><strong>1.084 Siswa</strong></div>
        <div class="mini-summary"><span>Kategori Pelanggaran</span><strong>28 Aturan</strong></div>
    </section>

    <section class="filters-panel">
        <div class="filter-group">
            <input type="text" placeholder="Cari nama, NIS, NISN, atau kelas...">
            <select><option>Kelas</option></select>
            <select><option>Status</option></select>
            <button class="ghost-btn">Unduh Template</button>
            <button class="primary-btn small">Import Excel</button>
        </div>
    </section>

    <section class="stats-bars">
        <div class="mini-stat"><span>Total Siswa Aktif</span><strong>1.080</strong><small>36 Rombongan Belajar</small></div>
        <div class="mini-stat"><span>Disiplin Prima</span><strong>942 Siswa</strong><small>87.2% siswa</small></div>
        <div class="mini-stat warn"><span>Warning</span><strong>118 Siswa</strong><small>Promban Wali Kelas</small></div>
        <div class="mini-stat danger"><span>Kritis SP 1/2</span><strong>24 Siswa</strong><small>Penggantian Orang Tua BK</small></div>
    </section>

    <section class="table-panel data-table-panel">
        <table>
            <thead>
                <tr>
                    <th>Profil Siswa</th>
                    <th>NIS / NISN</th>
                    <th>Rombel / Kelas</th>
                    <th>Gender</th>
                    <th>Akumulasi Poin</th>
                    <th>Status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="profile-cell"><span class="avatar blue">DA</span> Dimas Aditya<br><small>Wali: H. Supardi</small></td>
                    <td>222310088<br><small>0067891234</small></td>
                    <td>XI IPS 1</td>
                    <td>L</td>
                    <td><span class="point-badge point-blue">55</span></td>
                    <td><span class="status active">Aktif</span></td>
                    <td class="action-cell"><button>✎</button><button>🗑</button></td>
                </tr>
                <tr>
                    <td class="profile-cell"><span class="avatar green">RP</span> Rizki Pratama<br><small>Wali: Dra. Eni Sumarni</small></td>
                    <td>232410142<br><small>0072123945</small></td>
                    <td>XI IPA 2</td>
                    <td>L</td>
                    <td><span class="point-badge point-red">20</span></td>
                    <td><span class="status active">Aktif</span></td>
                    <td class="action-cell"><button>✎</button><button>🗑</button></td>
                </tr>
                <tr>
                    <td class="profile-cell"><span class="avatar amber">FN</span> Fajar Nugraha<br><small>Wali: Agus Santoso</small></td>
                    <td>242510045<br><small>0045210045</small></td>
                    <td>X-4</td>
                    <td>L</td>
                    <td><span class="point-badge point-amber">30</span></td>
                    <td><span class="status warning">Warning</span></td>
                    <td class="action-cell"><button>✎</button><button>🗑</button></td>
                </tr>
                <tr>
                    <td class="profile-cell"><span class="avatar purple">NP</span> Nadia Putri Lestari<br><small>Wali: Hj. Rina Marlia</small></td>
                    <td>245210012<br><small>0054210012</small></td>
                    <td>X-1</td>
                    <td>P</td>
                    <td><span class="point-badge point-blue">10</span></td>
                    <td><span class="status active">Aktif</span></td>
                    <td class="action-cell"><button>✎</button><button>🗑</button></td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection
