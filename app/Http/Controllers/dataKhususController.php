<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Admin OPD Provinsi dan Admin Ketua OPD Provinsi
class dataKhususController extends Controller
{
    public function buku(){
        $page = 'buku';
        // $pageAdmin = 'Admin OPD';
        $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.buku.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function penelitian(){
        $page = 'penelitian';
        // $pageAdmin = 'Admin OPD';
        $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.penelitian.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function majalah(){
        $page = 'majalah';
        // $pageAdmin = 'Admin OPD';
        $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.majalah.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function jurnal(){
        $page = 'jurnal';
        // $pageAdmin = 'Admin OPD';
        $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.jurnal.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function mou(){
        $page = 'mou';
        // $pageAdmin = 'Admin OPD';
        $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.mou.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }
}
