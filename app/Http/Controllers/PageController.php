<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function adminDashboard()
    {
        return view('dashboard.admin');
    }

    public function adminViolationTrends()
    {
        return view('dashboard.tren-pelanggaran');
    }

    public function guruDashboard()
    {
        return $this->guruPage('dashboard');
    }

    public function guruPage(string $page)
    {
        $pages = [
            'dashboard' => 'dashboard',
            'catat-keterlambatan' => 'catat-keterlambatan',
            'periksa-barang' => 'periksa-barang',
            'verifikasi-laporan' => 'verifikasi-laporan',
            'riwayat-pelanggaran' => 'riwayat-pelanggaran',
        ];

        abort_unless(isset($pages[$page]), 404);

        return view('dashboard.guru.'.$pages[$page]);
    }

    public function osisDashboard()
    {
        return view('dashboard.osis');
    }

    public function dataMaster()
    {
        return view('dashboard.data-master');
    }
}
