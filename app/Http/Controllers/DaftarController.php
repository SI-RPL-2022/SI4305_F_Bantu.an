<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DaftarController extends Controller
{
  public function __construct()
  {
      $this->middleware('guest');
  }

  public function daftar(Request $req){
    $data = $req->all();

    User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'type' => 0,
        'foto_profil' => 'foto.jpg'
    ]);

    return redirect()->route('login')->with('success','Registrasi Berhasil');
  }
}
