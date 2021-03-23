<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manajemenUserOpdController extends Controller
{
    public function index(){
        $page = 'manajemen-user-opd';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = 'Super Admin';

        return view('manajemen-user-opd.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahPengguna(){
        $page = 'manajemen-user-opd';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = 'Super Admin';

        return view('manajemen-user-opd.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahPengguna(){
        $page = 'manajemen-user-opd';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = 'Super Admin';

        return view('manajemen-user-opd.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }
}
