<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\DB;

class VerificatorController extends Controller
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

  public function verifyonline(){
    // $users = DB::select("SELECT peminjamans.buku, count(peminjamans.buku) as jumlah_buku, books.nama_buku from peminjamans LEFT JOIN books on peminjamans.buku = books.id where peminjamans.status = 'Diterima' GROUP BY peminjamans.buku");
    $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name","barang_donasi.id", "barang_donasi.nama_barang", "barang_donasi.jenis_barang", "barang_donasi.tanggal_donasi", "barang_donasi.status_cek", "barang_donasi.ketersediaan", "barang_donasi.metode_pengiriman")->where('status_cek',0)->get();
    return view('admin/verifikasiOnline',compact('data'));
  }

  public function verifyonsite(){
    $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name","barang_donasi.id", "barang_donasi.nama_barang", "barang_donasi.jenis_barang", "barang_donasi.tanggal_donasi", "barang_donasi.status_cek", "barang_donasi.ketersediaan", "barang_donasi.metode_pengiriman", "barang_donasi.deskripsi","barang_donasi.gambar")->where('status_cek',1)->get();
    return view('admin/verifikasiOnsite ',compact('data'));
  }

  public function verifikasipembelian(){
    $data = DB::table('pengajuan_barang')->join("barang_donasi","pengajuan_barang.barang","=","barang_donasi.id")->select("pengajuan_barang.id_pengajuan","pengajuan_barang.alasan","pengajuan_barang.metode_pengiriman", "pengajuan_barang.tgl_pengajuan", "barang_donasi.nama_barang", "barang_donasi.jenis_barang", "barang_donasi.deskripsi","barang_donasi.gambar")->where('pengajuan_barang.status',0)->get();
    return view('admin/verifikasiPembelian ',compact('data'));
  }

  public function showverif($id){
    $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang",  "barang_donasi.id", "barang_donasi.jenis_barang","barang_donasi.gambar", "barang_donasi.metode_pengiriman","barang_donasi.tanggal_donasi","barang_donasi.deskripsi","barang_donasi.status_cek")->where('barang_donasi.id',$id)->get();
    $gambar = DB::table('gambar')->where('barang',$id)->get();
    return view('admin/showverif',compact('data','gambar'));
  }

  public function showverifonsite($id){
    $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang",  "barang_donasi.id", "barang_donasi.jenis_barang","barang_donasi.gambar", "barang_donasi.metode_pengiriman","barang_donasi.tanggal_donasi","barang_donasi.deskripsi","barang_donasi.status_cek")->where('barang_donasi.id',$id)->get();
    return view('admin/showverifonsite',compact('data'));
  }

  public function showverifpembelian($id){
    $data = DB::table('pengajuan_barang')->join("barang_donasi","pengajuan_barang.barang","=","barang_donasi.id")->select("pengajuan_barang.barang","pengajuan_barang.id_pengajuan","pengajuan_barang.alasan","pengajuan_barang.metode_pengiriman", "pengajuan_barang.tgl_pengajuan", "barang_donasi.nama_barang", "barang_donasi.jenis_barang", "barang_donasi.deskripsi","barang_donasi.gambar")->where('pengajuan_barang.id_pengajuan',$id)->get();
    $user = DB::table('pengajuan_barang')->join("users","pengajuan_barang.pengaju","=","users.id")->select("users.name","users.email","users.created_at")->get();
    return view('admin/showverifpembelian',compact('data','user'));
  }

  public function verifikasi(Request $request){
      $input = $request->all();

      DB::table('pengecekan_barang')->insert([
        'barang'=>$input['barang'],
        'tanggal_pengecekan'=>date("Y-m-d H:i:s"),
        'status_pengecekan'=>$input['pengecekan'],
        'jenis_pengecekan'=>$input['jenis_cek'],
        'catatan'=>$input['deskripsi'],
      ]);

      DB::table('barang_donasi')->where('id',$input['barang'])->update([
        'status_cek'=>$input['pengecekan'],
        'ketersediaan'=>$input['status'],
        'harga'=>$input['harga']
      ]);

      return redirect()->route('verificator.verifyonline')->with(['success' => 'Berhasil Ditambah']);
  }

  public function prosesverifikasionsite(Request $request){
      $input = $request->all();

      DB::table('pengecekan_barang')->insert([
        'barang'=>$input['barang'],
        'tanggal_pengecekan'=>date("Y-m-d H:i:s"),
        'status_pengecekan'=>$input['pengecekan'],
        'jenis_pengecekan'=>$input['jenis_cek'],
        'catatan'=>$input['deskripsi'],
      ]);

      DB::table('barang_donasi')->where('id',$input['barang'])->update([
        'status_cek'=>$input['pengecekan'],
        'ketersediaan'=>$input['status'],
        'harga'=>$input['harga']
      ]);

      return redirect()->route('verificator.verifyonsite')->with(['success' => 'Berhasil Ditambah']);
  }

  public function prosesverifikasipembelian(Request $request){
      $input = $request->all();

      DB::table('pengecekan_barang')->insert([
        'barang'=>$input['barang'],
        'tanggal_pengecekan'=>date("Y-m-d H:i:s"),
        'status_pengecekan'=>$input['status'],
        'jenis_pengecekan'=>3,
        'catatan'=>$input['deskripsi'],
      ]);

      DB::table('pengajuan_barang')->where('id_pengajuan',$input['id_pengajuan'])->update([
        'status'=>$input['status']
      ]);

      return redirect()->route('verificator.verifikasipembelian')->with(['success' => 'Berhasil Ditambah']);
  }
}
