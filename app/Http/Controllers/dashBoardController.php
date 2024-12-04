<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\profile;
use App\Models\suratMasuk;
use App\Models\suratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashBoardController extends Controller
{
    public function index()
    {
        $suratMasuk = suratMasuk::where('user_id', Auth::user()->id)
        ->select('id', 'name')->count();;
        $suratKeluar = suratKeluar::where('user_id', Auth::user()->id)
        ->select('id', 'name')->count();;
        $category = category::where('user_id', Auth::user()->id)
        ->select('id', 'name')->count();
        $profile = profile::where('user_id', Auth::user()->id)->select('id','first_name')->first();
        return view('home', compact('category', 'suratMasuk', 'suratKeluar','profile'));
    }
}
