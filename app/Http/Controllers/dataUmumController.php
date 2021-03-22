<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Admin OPD Provinsi dan Admin Ketua OPD Provinsi
class dataUmumController extends Controller
{
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
        // $pageAdmin = 'Admin OPD';
        $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.pegawai.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function kantor(){
        $page = 'kantor';
        // $pageAdmin = 'Admin OPD';
        $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.kantor.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function webaplikasi(){
        $page = 'webaplikasi';
        // $pageAdmin = 'Admin OPD';
        $pageAdmin = 'Admin Ketua OPD';

        return view('data-umum.webaplikasi.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }
}
