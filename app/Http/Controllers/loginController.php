<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function index(){
        // $user = new User;

        // $user->nip = '123';
        // $user->nama = 'Jhonal';
        // $user->email = 'jhonal@gmail.com';
        // $user->noTelepon = '123';
        // $user->foto = '123';
        // $user->username = 'adminopd';
        // $user->password = bcrypt('1234');
        // $user->role = 'Admin OPD';
        // $user->lingkup = 'Provinsi';
        // $user->namaOPD = 'Litbang';
        // $user->akses = 'Aktif';

        // $user->save();

        // $user = new User;

        // $user->nip = '456';
        // $user->nama = 'Jhonal';
        // $user->email = 'jhonal2@gmail.com';
        // $user->noTelepon = '456';
        // $user->foto = '456';
        // $user->username = 'adminketuaopd';
        // $user->password = bcrypt('1234');
        // $user->role = 'Admin Ketua OPD';
        // $user->lingkup = 'Provinsi';
        // $user->namaOPD = 'Litbang';
        // $user->akses = 'Aktif';

        // $user->save();

        // $user = new User;

        // $user->nip = '789';
        // $user->nama = 'Jhonal';
        // $user->email = 'jhonal3@gmail.com';
        // $user->noTelepon = '789';
        // $user->foto = '789';
        // $user->username = 'adminutama';
        // $user->password = bcrypt('1234');
        // $user->role = 'Admin Utama';
        // $user->lingkup = 'Provinsi';
        // $user->namaOPD = '-';
        // $user->akses = 'Aktif';

        // $user->save();

        // $user = new User;

        // $user->nip = '101';
        // $user->nama = 'Jhonal';
        // $user->email = 'jhonal4@gmail.com';
        // $user->noTelepon = '101';
        // $user->foto = '101';
        // $user->username = 'adminsuper';
        // $user->password = bcrypt('1234');
        // $user->role = 'Super Admin';
        // $user->lingkup = 'Provinsi';
        // $user->namaOPD = '-';
        // $user->akses = 'Aktif';

        // $user->save();

        //kominfo

        // $user = new User;

        // $user->nip = '112';
        // $user->nama = 'kaleb';
        // $user->email = 'kaleb@gmail.com';
        // $user->noTelepon = '112';
        // $user->foto = '112';
        // $user->username = 'adminopd1';
        // $user->password = bcrypt('1234');
        // $user->role = 'Admin OPD';
        // $user->lingkup = 'Provinsi';
        // $user->namaOPD = 'Kominfo';
        // $user->akses = 'Aktif';

        // $user->save();

        // $user = new User;

        // $user->nip = '113';
        // $user->nama = 'kaleb';
        // $user->email = 'kaleb2@gmail.com';
        // $user->noTelepon = '113';
        // $user->foto = '113';
        // $user->username = 'adminketuaopd1';
        // $user->password = bcrypt('1234');
        // $user->role = 'Admin Ketua OPD';
        // $user->lingkup = 'Provinsi';
        // $user->namaOPD = 'Kominfo';
        // $user->akses = 'Aktif';

        // $user->save();

        return view('login');
    }

    public function auth(Request $request){

        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
        ]);

    	if(auth()->attempt(['username' => $request->username, 'password' => $request->password, 'role' => 'Super Admin'])){
            return redirect()->route('home');
    	}
        else if (auth()->attempt(['username' => $request->username, 'password' => $request->password, 'role' => 'Admin Utama'])){
            return redirect()->route('home');
    	}
        else if (auth()->attempt(['username' => $request->username, 'password' => $request->password, 'role' => 'Admin OPD'])){
            return redirect()->route('home');
    	}
        else if (auth()->attempt(['username' => $request->username, 'password' => $request->password, 'role' => 'Admin Ketua OPD'])){
            return redirect()->route('home');
    	}
        else{
            return redirect()->back();
        }
    }

    public function logout(){

        auth()->logout();
    	return redirect()->route('login');
    }
}
