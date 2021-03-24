<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Admin OPD Provinsi dan Admin Ketua OPD Provinsi
class dataKhususController extends Controller
{
    public function buku(){
        $page = 'buku';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.buku.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahBuku(){
        $page = 'buku';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.buku.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahBuku(){
        $page = 'buku';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.buku.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function penelitian(){
        $page = 'penelitian';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.penelitian.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahPenelitian(){
        $page = 'penelitian';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.penelitian.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahPenelitian(){
        $page = 'penelitian';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.penelitian.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function majalah(){
        $page = 'majalah';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.majalah.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahMajalah(){
        $page = 'majalah';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.majalah.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahMajalah(){
        $page = 'majalah';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.majalah.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function jurnal(){
        $page = 'jurnal';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.jurnal.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahJurnal(){
        $page = 'jurnal';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.jurnal.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahJurnal(){
        $page = 'jurnal';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.jurnal.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function mou(){
        $page = 'mou';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.mou.index', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function tambahMou(){
        $page = 'mou';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.mou.tambah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }

    public function ubahMou(){
        $page = 'mou';
        $pageAdmin = Auth::user()->role;
        // $pageAdmin = 'Admin Ketua OPD';

        return view('data-khusus.mou.ubah', ['page' => $page, 'pageAdmin' => $pageAdmin]);
    }
}
