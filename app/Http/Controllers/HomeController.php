<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Barang_Donasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function masuk(){
      return view('auth-login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }

    public function home()
    {
        $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang", "barang_donasi.id", "barang_donasi.jenis_barang", "barang_donasi.metode_pengiriman","barang_donasi.tanggal_donasi","barang_donasi.deskripsi","barang_donasi.status_cek","barang_donasi.ketersediaan","barang_donasi.gambar")->where('barang_donasi.ketersediaan',1)->get();
        return view('indexlogin',compact("data"));
    }

    public function katalog()
    {
        $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang", "barang_donasi.id", "barang_donasi.jenis_barang", "barang_donasi.metode_pengiriman","barang_donasi.tanggal_donasi","barang_donasi.deskripsi","barang_donasi.status_cek","barang_donasi.ketersediaan","barang_donasi.gambar")->where('barang_donasi.ketersediaan',1)->paginate(10);
        return view('katalog',compact("data"));
    }

    public function adddonation(){
        return view('adddonation');
    }

    public function postdonation(Request $request){
    $input = $request->all();

    $namafile = time().'.'.$request->gambar->extension();
    $request->gambar->move(public_path('/assets/verifikasi'), $namafile);

    DB::table('barang_donasi')->insert([
      'nama_barang'=>$input['nama'],
      'jenis_barang'=>$input['jenis'],
      'donatur'=>auth()->user()->id,
      'tanggal_donasi'=>date("Y-m-d H:i:s"),
      'status_cek'=>0,
      'ketersediaan'=>0,
      'metode_pengiriman'=> $input['metode_pengiriman'],
      'deskripsi'=> $input['deskripsi'],
      'gambar'=> $namafile,
      'harga'=>0
    ]);

    return redirect()->route('adddonation')->with(['success' => 'Berhasil Ditambah']);
    }

    public function donasiku(){
      $id = auth()->user()->id;
      $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang", "barang_donasi.jenis_barang", "barang_donasi.metode_pengiriman","barang_donasi.tanggal_donasi","barang_donasi.deskripsi","barang_donasi.status_cek","barang_donasi.ketersediaan","barang_donasi.gambar")->where('barang_donasi.donatur',$id)->get();
      return view('donasiku',compact("data"));
    }

    public function pengajuanku(){
      $id = auth()->user()->id;
      $data = DB::table('pengajuan_barang')->join("barang_donasi","pengajuan_barang.barang","=","barang_donasi.id")->select("pengajuan_barang.id_pengajuan", "barang_donasi.jenis_barang", "pengajuan_barang.metode_pengiriman","pengajuan_barang.tgl_pengajuan","barang_donasi.nama_barang","pengajuan_barang.status","barang_donasi.gambar")->where('pengajuan_barang.pengaju',$id)->get();
      return view('pengajuanku',compact("data"));
    }

    public function detailProduk($id){
      $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang", "barang_donasi.id", "barang_donasi.jenis_barang", "barang_donasi.metode_pengiriman","barang_donasi.tanggal_donasi","barang_donasi.deskripsi","barang_donasi.status_cek","barang_donasi.ketersediaan","barang_donasi.gambar","barang_donasi.harga")->where('barang_donasi.id',$id)->get();
      return view('detailproduk',compact('data'));
    }

    public function tambahpengajuan($id){
      $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang", "barang_donasi.id","barang_donasi.deskripsi","barang_donasi.harga")->where('barang_donasi.id',$id)->get();
      return view('tambahpembelian',compact('data'));
    }

    public function sumbangan(){
      $data = DB::table('kegiatan_donasi')->join("mitra_donasi","kegiatan_donasi.mitra","=","mitra_donasi.id")->select("mitra_donasi.nama_mitra", "kegiatan_donasi.id", "mitra_donasi.jenis_mitra", "kegiatan_donasi.nama_donasi","kegiatan_donasi.batas_waktu","kegiatan_donasi.deskripsi")->get();
      return view('sumbanganku',compact('data'));
    }

    public function postpengajuan(Request $request){
    $input = $request->all();

    DB::table('pengajuan_barang')->insert([
      'pengaju'=>auth()->user()->id,
      'barang'=>$input['barang'],
      'metode_pengiriman'=> $input['metode_pengiriman'],
      'alasan'=> $input['deskripsi'],
      'status'=> 0
    ]);

    return redirect()->route('tambahpengajuan')->with(['success' => 'Berhasil Ditambah']);
  }
}
