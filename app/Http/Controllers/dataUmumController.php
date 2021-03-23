<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Admin OPD Provinsi dan Admin Ketua OPD Provinsi
class dataUmumController extends Controller
{
    public function profil(){
        $page = '';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = 'Super Admin';
        // $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('profil', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahProfil(){
        $page = '';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = 'Super Admin';
        // $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('ubah-profil', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function index(){
        $page = 'dashboard';
        // $pageAdmin = 'Admin Utama';
        $pageAdmin = 'Super Admin';
        // $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('home', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function pegawai(){
        $page = 'pegawai';
        $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.pegawai.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahPegawai(){
        $page = 'pegawai';
        $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.pegawai.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahPegawai(){
        $page = 'pegawai';
        $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.pegawai.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function kantor(){
        $page = 'kantor';
        $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.kantor.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahKantor(){
        $page = 'kantor';
        $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.kantor.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function webaplikasi(){
        $page = 'webaplikasi';
        $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.webaplikasi.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahWebaplikasi(){
        $page = 'webaplikasi';
        $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.webaplikasi.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahWebaplikasi(){
        $page = 'webaplikasi';
        $pageAdmin = 'Admin OPD';
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.webaplikasi.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }
}
