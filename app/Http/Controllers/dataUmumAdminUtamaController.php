<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

//Super Admin dan Admin Utama
class dataUmumAdminUtamaController extends Controller
{
    public function index(){
        $page = 'data-umum';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = Auth::user()->role;

        return view('data-umum-admin-utama.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function grafik(){
        $page = 'data-umum';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = Auth::user()->role;

        return view('data-umum-admin-utama.grafik', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tabel(){
        $page = 'data-umum';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = Auth::user()->role;

        return view('data-umum-admin-utama.tabel', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }
}
