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

    public function guruDashboard()
    {
        return view('dashboard.guru');
    }

    public function dataMaster()
    {
        return view('dashboard.data-master');
    }
}
