<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class AdminController extends Controller
{
    public function index(){
      return view('admin/dashboard');
    }

    public function profile(){
      $id = auth()->user()->type;
      $data = User::find($id);
      return view('admin/profile',compact('data'));
    }
}
