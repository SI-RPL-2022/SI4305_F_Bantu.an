<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
      $users = DB::select("SELECT count(id) as jumlah_anggota from users where type = 0");
      $mitra = DB::select("SELECT count(id) as jumlah_mitra from mitra_donasi");
      $masuk = DB::select("SELECT sum(harga) as pemasukanuang from barang_donasi where ketersediaan = 3");
      $transaksi = DB::select("SELECT jenis_barang, sum(harga) as total from barang_donasi where ketersediaan = 3 GROUP BY jenis_barang");
      $total = DB::select("SELECT count(id) as jumlah from barang_donasi where ketersediaan");
      return view('admin/dashboard',compact('users','mitra','masuk','transaksi','total'));
    }

    public function profile(){
      $id = auth()->user()->type;
      $data = User::find($id);
      return view('admin/profile',compact('data'));
    }
}
