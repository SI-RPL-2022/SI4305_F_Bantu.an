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
        $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang", "barang_donasi.id", "barang_donasi.jenis_barang", "barang_donasi.metode_pengiriman","barang_donasi.tanggal_donasi","barang_donasi.deskripsi","barang_donasi.status_cek","barang_donasi.ketersediaan","barang_donasi.gambar")->where('barang_donasi.ketersediaan',1)->get();
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
      'gambar'=> $namafile
    ]);

    return redirect()->route('adddonation')->with(['success' => 'Berhasil Ditambah']);
    }

    public function donasiku(){
      $id = auth()->user()->id;
      $data = DB::table('barang_donasi')->join("users","barang_donasi.donatur","=","users.id")->select("users.name", "barang_donasi.nama_barang", "barang_donasi.jenis_barang", "barang_donasi.metode_pengiriman","barang_donasi.tanggal_donasi","barang_donasi.deskripsi","barang_donasi.status_cek","barang_donasi.ketersediaan","barang_donasi.gambar")->where('barang_donasi.donatur',$id)->get();
      return view('donasiku',compact("data"));
    }
}
