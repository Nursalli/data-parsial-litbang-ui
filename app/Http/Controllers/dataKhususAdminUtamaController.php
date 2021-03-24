<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Super Admin dan Admin Utama
class dataKhususAdminUtamaController extends Controller
{
    public function index(){
        $page = 'data-khusus';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = Auth::user()->role;

        return view('data-khusus-admin-utama.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function grafik(){
        $page = 'data-khusus';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = Auth::user()->role;

        return view('data-khusus-admin-utama.grafik', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tabel(){
        $page = 'data-khusus';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = Auth::user()->role;

        return view('data-khusus-admin-utama.tabel', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }
}
