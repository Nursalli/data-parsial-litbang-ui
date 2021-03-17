<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminOPDController extends Controller
{
    public function index(){
        $page = 'dashboard';

        return view('home', ['page' => $page]);
    }

    public function pegawai(){
        $page = 'pegawai';

        return view('data-umum.pegawai.index', ['page' => $page]);
    }

    public function kantor(){
        $page = 'kantor';

        return view('data-umum.kantor.index', ['page' => $page]);
    }

    public function webaplikasi(){
        $page = 'webaplikasi';

        return view('data-umum.webaplikasi.index', ['page' => $page]);
    }
}
