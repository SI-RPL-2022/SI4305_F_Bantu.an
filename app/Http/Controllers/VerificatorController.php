<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\DB;

class VerificatorController extends Controller
{
  public function index(){
    return view('admin/dashboard');
  }

  public function profile(){
    $id = auth()->user()->type;
    $data = User::find($id);
    return view('admin/profile',compact('data'));
  }

  public function verifyonline(){
    // $users = DB::select("SELECT peminjamans.buku, count(peminjamans.buku) as jumlah_buku, books.nama_buku from peminjamans LEFT JOIN books on peminjamans.buku = books.id where peminjamans.status = 'Diterima' GROUP BY peminjamans.buku");
    $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name","barang_donasi.id", "barang_donasi.nama_barang", "barang_donasi.jenis_barang", "barang_donasi.tanggal_donasi", "barang_donasi.status_cek", "barang_donasi.ketersediaan", "barang_donasi.metode_pengiriman")->where('status_cek',0)->get();
    return view('admin/verifikasiOnline',compact('data'));
  }

  public function verifyonsite(){
    // $users = DB::select("SELECT peminjamans.buku, count(peminjamans.buku) as jumlah_buku, books.nama_buku from peminjamans LEFT JOIN books on peminjamans.buku = books.id where peminjamans.status = 'Diterima' GROUP BY peminjamans.buku");
    $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name","barang_donasi.id", "barang_donasi.nama_barang", "barang_donasi.jenis_barang", "barang_donasi.tanggal_donasi", "barang_donasi.status_cek", "barang_donasi.ketersediaan", "barang_donasi.metode_pengiriman")->where('status_cek',1)->get();
    return view('admin/verifikasiOnsite',compact('data'));
  }

  public function showverif($id){
    $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang", "barang_donasi.jenis_barang", "barang_donasi.metode_pengiriman","barang_donasi.tanggal_donasi","barang_donasi.deskripsi","barang_donasi.status_cek")->where('barang_donasi.id',$id)->get();
    $gambar = DB::table('gambar')->where('barang',$id)->get();
    return view('admin/showverif',compact('data','gambar'));
  }

}
