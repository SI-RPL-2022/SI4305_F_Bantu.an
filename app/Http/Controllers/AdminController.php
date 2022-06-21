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

    public function partner(){
      $data = DB::table('kegiatan_donasi')->select("id", "nama_donasi","batas_waktu","mitra","deskripsi","status")->get();
      return view('admin/partner',compact('data'));
    }

    public function verifpartner(){
      $data = DB::table('kegiatan_donasi')->select("id", "nama_donasi","batas_waktu","mitra","deskripsi","status")->where("status",0)->get();
      return view('admin/verifpartner',compact('data'));
    }

    public function showverifcharity($id){
      $data = DB::table('kegiatan_donasi')->select("id", "nama_donasi","batas_waktu","mitra","deskripsi","status","dokumen")->where("id", $id)->get();
      return view('admin/showverifpartner',compact('data'));
    }

    public function prosesverifikasipartner(Request $request){
        $input = $request->all();

        DB::table('kegiatan_donasi')->where('id',$input['id'])->update([
          'status'=>$input['status']
        ]);

        return redirect()->route('admin.approvepartner')->with(['success' => 'Berhasil Ditambah']);
    }

}
