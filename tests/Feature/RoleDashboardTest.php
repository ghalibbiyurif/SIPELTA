<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoleDashboardTest extends TestCase
{
    public function test_login_page_offers_all_three_roles(): void
    {
        $this->get('/login')
            ->assertOk()
            ->assertSee('value="admin" checked', false)
            ->assertSee('value="guru"', false)
            ->assertSee('value="osis"', false);
    }

    public function test_teacher_dashboard_is_rendered_as_an_interactive_page(): void
    {
        $this->get('/guru')
            ->assertOk()
            ->assertSeeText('Selamat datang, Bu Rina Marlina, S.Pd.')
            ->assertSee('data-filter-table', false)
            ->assertDontSee('<img', false)
            ->assertSee('guru/catat-keterlambatan')
            ->assertSee('guru/periksa-barang')
            ->assertSee('guru/verifikasi-laporan')
            ->assertSee('guru/riwayat-pelanggaran');
    }

    public function test_teacher_navigation_opens_the_corresponding_pages(): void
    {
        $pages = [
            '/guru/catat-keterlambatan' => 'Catat Keterlambatan Siswa',
            '/guru/periksa-barang' => 'Pemeriksaan Barang Bawaan Siswa',
            '/guru/verifikasi-laporan' => 'Verifikasi Laporan Kerapihan',
            '/guru/riwayat-pelanggaran' => 'Riwayat Pelanggaran Siswa',
        ];

        foreach ($pages as $url => $heading) {
            $this->get($url)
                ->assertOk()
                ->assertSeeText($heading)
                ->assertSeeText('Menu utama')
                ->assertDontSee('<img', false);
        }
    }

    public function test_osis_dashboard_is_available(): void
    {
        $this->get('/osis')
            ->assertOk()
            ->assertSeeText('Dashboard OSIS');
    }
}
