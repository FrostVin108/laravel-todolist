<?php

namespace App\Http\Controllers;
use App\Models\pegawai;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        $pegawai = Pegawai::get(); 
    
        return view('index', compact('pegawai'));
    }
}
