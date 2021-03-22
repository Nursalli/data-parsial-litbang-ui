<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Super Admin dan Admin Utama
class dataKhususAdminUtamaController extends Controller
{
    public function index(){
        $page = 'data-khusus';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = 'Super Admin';

        return view('data-khusus-admin-utama.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function grafik(){
        $page = 'data-khusus';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = 'Super Admin';

        return view('data-khusus-admin-utama.grafik', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tabel(){
        $page = 'data-khusus';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = 'Super Admin';

        return view('data-khusus-admin-utama.tabel', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }
}
