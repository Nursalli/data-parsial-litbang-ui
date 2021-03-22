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
}
