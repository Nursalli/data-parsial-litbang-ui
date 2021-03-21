<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataKhususController extends Controller
{
    public function buku(){
        $page = 'buku';

        return view('data-khusus.buku.index', ['page' => $page]);
    }

    public function penelitian(){
        $page = 'penelitian';

        return view('data-khusus.penelitian.index', ['page' => $page]);
    }

    public function majalah(){
        $page = 'majalah';

        return view('data-khusus.majalah.index', ['page' => $page]);
    }

    public function jurnal(){
        $page = 'jurnal';

        return view('data-khusus.jurnal.index', ['page' => $page]);
    }

    public function mou(){
        $page = 'mou';

        return view('data-khusus.mou.index', ['page' => $page]);
    }
}
