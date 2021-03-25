<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Admin OPD Provinsi dan Admin Ketua OPD Provinsi
class dataKhususController extends Controller
{
    //litbang
    public function buku(){
        $page = 'buku';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.buku.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahBuku(){
        $page = 'buku';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.buku.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahBuku(){
        $page = 'buku';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.buku.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function penelitian(){
        $page = 'penelitian';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.penelitian.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahPenelitian(){
        $page = 'penelitian';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.penelitian.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahPenelitian(){
        $page = 'penelitian';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.penelitian.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function majalah(){
        $page = 'majalah';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.majalah.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahMajalah(){
        $page = 'majalah';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.majalah.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahMajalah(){
        $page = 'majalah';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.majalah.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function jurnal(){
        $page = 'jurnal';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.jurnal.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahJurnal(){
        $page = 'jurnal';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.jurnal.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahJurnal(){
        $page = 'jurnal';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.jurnal.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function mou(){
        $page = 'mou';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.mou.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahMou(){
        $page = 'mou';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.mou.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahMou(){
        $page = 'mou';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.litbang.mou.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    //kominfo
    public function perangkatKeras(){
        $page = 'perangkat-keras';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.kominfo.perangkat-keras.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahPerangkatKeras(){
        $page = 'perangkat-keras';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.kominfo.perangkat-keras.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahPerangkatKeras(){
        $page = 'perangkat-keras';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.kominfo.perangkat-keras.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function perangkatLunak(){
        $page = 'perangkat-lunak';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.kominfo.perangkat-lunak.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahPerangkatLunak(){
        $page = 'perangkat-lunak';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.kominfo.perangkat-lunak.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahPerangkatLunak(){
        $page = 'perangkat-lunak';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.kominfo.perangkat-lunak.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function aplikasi(){
        $page = 'aplikasi';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.kominfo.aplikasi.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahAplikasi(){
        $page = 'aplikasi';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.kominfo.aplikasi.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahAplikasi(){
        $page = 'aplikasi';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.kominfo.aplikasi.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }
}
