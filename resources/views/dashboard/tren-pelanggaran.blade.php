@extends('layouts.sipelta')

@section('title', 'SIPELTA | Tren Pelanggaran')

@section('content')
    <div class="trends-topbar">
        <span class="trends-breadcrumb">⌂ / Dashboard Admin</span>
        <label class="trends-search"><span>⌕</span><input type="search" placeholder="Cari siswa, NIS, atau data pelanggaran..."></label>
        <div class="trends-account"><span class="trends-notification">♟</span><span class="trends-admin-badge">ADMIN</span><span class="trends-account-avatar">B</span><span>Bpk. Hendra Gunawan,<small>Super Admin</small></span></div>
    </div>

    <div class="trends-page">
        <header class="trends-heading">
            <div class="trends-crumbs">SIPELTA <span>›</span> Administrasi <span>›</span> <strong>Tren &amp; Analisis Pelanggaran</strong> <b>● ANALISIS DATA AKADEMIK GENAP 2025/2026</b></div>
            <div class="trends-title-row">
                <div>
                    <h1>Tren &amp; Statistik Pelanggaran Siswa</h1>
                    <p>Analisis komprehensif pola indisipliner, frekuensi keterlambatan, kerapihan seragam, dan distribusi rombel SMAN 1 Cileunyi secara periodik untuk evaluasi Tim Ketertiban &amp; Guru BK.</p>
                </div>
                <button class="trends-export" type="button">⇩ <span>Ekspor<br>Pelanggaran</span>⌄</button>
            </div>
        </header>

        <section class="trends-filters" aria-label="Parameter analitik">
            <div class="trends-filter-heading"><strong>☷ &nbsp; Parameter Analitik</strong><div class="trends-period"><button type="button" class="selected">Bulanan (Aktif)</button><button type="button">Semester</button></div></div>
            <div class="trends-filter-fields">
                <label>Tahun Ajaran<select><option>2025/2026</option></select></label>
                <label>Semester<select><option>Semester Genap</option></select></label>
                <label>Kategori Pelanggaran<select><option>✓ Semua Kategori (4 Kategori)</option></select></label>
                <label>Tingkat / Rombel<select><option>Semua Tingkat (X, XI, XII)</option></select></label>
                <button class="trends-apply" type="button">⚑ &nbsp; Terapkan</button>
                <button class="trends-reset" type="button">Reset</button>
            </div>
        </section>

        <section class="trends-summary" aria-label="Ringkasan pelanggaran">
            <article class="trends-summary-card"><small>KATEGORI TERBANYAK</small><h2>Keterlambatan<br>Masuk</h2><b class="trends-tag blue">◉ &nbsp;45.2% dari Total Kasus</b><p>482 kejadian tercatat di pos gerbang barat &amp; timur</p></article>
            <article class="trends-summary-card"><small>BULAN PUNCAK TERTINGGI</small><h2>Agustus 2025</h2><b class="trends-tag amber">⚠ &nbsp;142 Kasus Tercatat</b><p>Masa adaptasi awal tahun ajaran baru &amp; MPLS</p></article>
            <article class="trends-summary-card"><small>TREN VS SEMESTER LALU</small><h2 class="trends-blue-text">↘ -8.4%</h2><b class="trends-tag blue">◉ &nbsp;Disiplin Membaik</b><p>Dibandingkan semester ganjil (1.240 vs 1.135 poin)</p></article>
            <article class="trends-summary-card"><small>ROMBEL TERTINGGI POIN</small><h2>Kelas XI IPS 2</h2><b class="trends-tag red">⚑ &nbsp;68 Poin Akumulasi</b><p>Wali Kelas: Drs. Bambang Irawan (14 siswa tercatat)</p></article>
        </section>

        <section class="trends-insights">
            <div class="trends-section-heading"><strong>✧ Ringkasan Wawasan &amp; Rekomendasi Otomatis SIPELTA</strong><span>Dihasilkan: 11 Maret 2026, 08:30 WIB</span></div>
            <div class="trends-insight-grid">
                <article><strong>⚠ Keterlambatan Melonjak di Hari Senin</strong><p>Frekuensi keterlambatan gerbang meningkat <b>34%</b> pada Senin pagi (07.00 – 07.20 WIB) dibanding hari efektif lainnya. Pos piket 1 &amp; 2 direkomendasikan menambah personel.</p></article>
                <article><strong>▦ Tren Kerapihan Atribut Seragam</strong><p>Atribut dasi &amp; kaos kaki non-standar bertambah <b>15%</b> pada September dibanding Agustus pasca transisi seragam. Perlu razia berkala serentak tingkat rombel.</p></article>
                <article><strong>◉ Efektivitas Sanksi Pembinaan</strong><p><b>78% siswa</b> yang telah menjalani pembinaan wali kelas &amp; tugas literasi terbukti tidak mengulangi pelanggaran dalam 30 hari kalender berjalan.</p></article>
            </div>
        </section>

        <section class="trends-charts">
            <article class="trends-panel trends-volume">
                <div class="trends-panel-heading"><div><h2>Tren Jumlah Kasus per Bulan</h2><p>Periode Juli 2025 – Maret 2026 (9 Bulan Kalender Akademik)</p></div><div class="trends-legend"><span><i class="line-blue"></i>Keterlambatan</span><span><i class="line-amber"></i>Kerapihan</span><span><i class="line-red"></i>Barang Sitaan</span><span><i class="line-navy"></i>Disiplin KBM</span></div></div>
                <div class="trends-line-chart">
                    <div class="trends-y-labels"><span>160</span><span>120</span><span>80</span><span>40</span></div>
                    <svg viewBox="0 0 600 205" role="img" aria-label="Grafik tren jumlah kasus per kategori dari Juli hingga Maret">
                        <path class="chart-grid" d="M0 20H600 M0 68H600 M0 116H600 M0 164H600"/>
                        <path class="chart-area" d="M0 118 L75 24 L150 61 L225 80 L300 99 L375 72 L450 68 L525 88 L600 101 L600 164 L0 164Z"/>
                        <path class="chart-blue" d="M0 118 L75 24 L150 61 L225 80 L300 99 L375 72 L450 68 L525 88 L600 101"/>
                        <path class="chart-amber" d="M0 145 L75 95 L150 78 L225 108 L300 127 L375 104 L450 112 L525 126 L600 140"/>
                        <path class="chart-navy" d="M0 155 L75 132 L150 119 L225 136 L300 126 L375 134 L450 143 L525 151 L600 156"/>
                        <path class="chart-red" d="M0 166 L75 158 L150 145 L225 153 L300 165 L375 151 L450 157 L525 164 L600 168"/>
                        <circle cx="75" cy="24" r="4" class="chart-point"/><rect x="48" y="0" width="56" height="19" rx="4" class="chart-callout"/><text x="54" y="13" class="chart-callout-text">142 Kasus</text>
                    </svg>
                    <div class="trends-x-labels"><span>Jul</span><span>Agu ’25</span><span>Sep</span><span>Okt</span><span>Nov</span><span>Des</span><span>Jan ’26</span><span>Feb</span><span>Mar (Aktif)</span></div>
                </div>
                <div class="trends-chart-foot"><span>*Data diperbarui harian dari sistem pos piket digital</span><strong>Rata-rata: 132.2 Kasus / Bulan</strong></div>
            </article>
            <article class="trends-panel trends-donut-panel">
                <div class="trends-panel-heading"><div><h2>Proporsi Kategori</h2><p>Distribusi bobot komparatif dari total 1.190 kasus</p></div></div>
                <div class="trends-donut"><div><strong>1.190</strong><span>Total Kasus</span></div></div>
                <ul class="trends-donut-legend"><li><i class="dot-blue"></i>Keterlambatan <b>536 (45%)</b></li><li><i class="dot-amber"></i>Kerapihan &amp; <b>357 (30%)</b></li><li><i class="dot-red"></i>Barang Sitaan / <b>178 (15%)</b></li><li><i class="dot-navy"></i>Disiplin Belajar <b>119 (10%)</b></li></ul>
            </article>
        </section>

        <section class="trends-middle">
            <article class="trends-panel trends-levels">
                <div class="trends-panel-heading"><div><h2>Distribusi Kasus per Tingkat</h2><p>Komparasi total pelanggaran berdasarkan jenjang angkatan</p></div><b class="trends-total-badge">Total: 1.190</b></div>
                <div class="trends-level-row"><div><strong>Kelas X <small>(Fase E)</small></strong><span>12 Rombel</span><b>340 Kasus</b></div><i><em style="width: 42%"></em></i></div>
                <div class="trends-level-row"><div><strong>Kelas XI <small>(Fase F - Tingkat 11)</small></strong><span class="trends-alert">TERTINGGI</span><b class="red-text">510 Kasus<br><small>42.9% dari total</small></b></div><i class="high"><em style="width: 70%"></em></i></div>
                <div class="trends-level-row"><div><strong>Kelas XII <small>(Fase F Akhir)</small></strong><span>Fokus Ujian</span><b>340 Kasus</b></div><i><em style="width: 42%"></em></i></div>
                <div class="trends-note">Rombel paling rapi: <strong>XII MIPA 1</strong><b>Hanya 3 Poin Akumulasi</b></div>
            </article>
            <article class="trends-panel trends-intensity">
                <div class="trends-panel-heading"><div><h2>Intensitas Kasus per Hari</h2><p>Frekuensi kejadian berdasarkan hari efektif KBM sekolah</p></div><span class="trends-scale">Rendah <i></i><i></i><i></i><i></i> Tinggi</span></div>
                <div class="trends-day-grid">
                    <div><span>SEN</span><i style="height: 76%"></i><b>312</b><small>TINGGI</small></div><div><span>SEL</span><i style="height: 45%"></i><b>180</b><small>SEDANG</small></div><div><span>RAB</span><i style="height: 51%"></i><b>195</b><small>SEDANG</small></div><div><span>KAM</span><i class="low" style="height: 35%"></i><b>145</b><small>RENDAH</small></div><div><span>JUM</span><i style="height: 55%"></i><b>210</b><small>SEDANG</small></div>
                </div>
                <div class="trends-note trends-factor">ⓘ &nbsp; Faktor utama Senin: Upacara bendera, razia kerapihan atribut, dan kemacetan jalur Cileunyi–Bandung.</div>
            </article>
        </section>

        <section class="trends-panel trends-matrix">
            <div class="trends-panel-heading"><div><h2>Matriks Rekapitulasi Pelanggaran Bulanan</h2><p>Sebaran data aktual seluruh kategori pelanggaran tahun ajaran 2025/2026</p></div><span class="trends-unit">Satuan: Kasus Terverifikasi</span></div>
            <div class="trends-table-wrap">
                <table>
                    <thead><tr><th>KATEGORI &amp; JENIS<br>PELANGGARAN</th><th>JUL</th><th>AGU</th><th>SEP</th><th>OKT</th><th>NOV</th><th>DES</th><th>JAN</th><th>FEB</th><th>MAR</th><th>TOTAL<br>KASUS</th><th>BOBOT<br>POIN</th><th>PANGSA<br>(%)</th></tr></thead>
                    <tbody>
                        <tr><td><i class="dot-blue"></i>Keterlambatan Masuk Gerbang</td><td>45</td><td class="emphasis-red">78</td><td>62</td><td>54</td><td>48</td><td>38</td><td>59</td><td>52</td><td><b>46</b></td><td><strong>482</strong></td><td>964 Poin</td><td><span class="share">40.5%</span></td></tr>
                        <tr><td><i class="dot-amber"></i>Kerapihan Seragam &amp; Atribut</td><td>24</td><td>36</td><td class="emphasis-amber">42</td><td>30</td><td>25</td><td>18</td><td>36</td><td>28</td><td><b>21</b></td><td><strong>250</strong></td><td>500 Poin</td><td><span class="share">21.0%</span></td></tr>
                        <tr><td><i class="dot-brown"></i>Kaos Kaki &amp; Sepatu Non-Standar</td><td>12</td><td>18</td><td>16</td><td>14</td><td>10</td><td>6</td><td>12</td><td>11</td><td><b>8</b></td><td><strong>107</strong></td><td>214 Poin</td><td><span class="share">9.0%</span></td></tr>
                        <tr><td><i class="dot-red"></i>Barang Sitaan (Rokok / Vape / HP)</td><td>8</td><td>10</td><td>15</td><td>12</td><td>8</td><td>5</td><td>9</td><td>7</td><td><b>6</b></td><td><strong>80</strong></td><td>800 Poin</td><td><span class="share red-share">6.7%</span></td></tr>
                        <tr><td><i class="dot-navy"></i>Meninggalkan Jam Pelajaran (KBM)</td><td>10</td><td>15</td><td>14</td><td>18</td><td>10</td><td>8</td><td>14</td><td>16</td><td><b>12</b></td><td><strong>119</strong></td><td>595 Poin</td><td><span class="share">10.0%</span></td></tr>
                        <tr><td><i class="dot-blue"></i>Pelanggaran Disiplin Upacara</td><td>16</td><td>22</td><td>20</td><td>14</td><td>12</td><td>9</td><td>18</td><td>15</td><td><b>17</b></td><td><strong>152</strong></td><td>304 Poin</td><td><span class="share">12.8%</span></td></tr>
                    </tbody>
                    <tfoot><tr><th>Total Keseluruhan</th><th>115</th><th class="emphasis-red">179</th><th>169</th><th>142</th><th>115</th><th>83</th><th>140</th><th>127</th><th>110</th><th>1.190</th><th>3.377 Poin</th><th>100.0%</th></tr></tfoot>
                </table>
            </div>
            <div class="trends-matrix-foot"><span>Menampilkan seluruh 6 kategori rekapitulasi data genap 2025/2026</span><button type="button">▣ Cetak Lembar Matriks</button></div>
        </section>
        <footer class="trends-footer"><span>SIPELTA © 2026 SMAN 1 Cileunyi, Kabupaten Bandung, Jawa Barat.</span><span>Sistem Informasi Pelanggaran &amp; Tata Tertib &nbsp;•&nbsp; v2.4.0</span></footer>
    </div>
@endsection
