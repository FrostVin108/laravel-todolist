<?php

namespace App\Http\Controllers;
use App\Models\pegawai;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class HomeController extends Controller
{
    public function index(): View
    {
        $pegawai = Pegawai::get(); 
    
        return view('index', compact('pegawai'));
    }

    /**
     * create
     *
     * @param  mixed $request
     * @return RedirectResponse
     */

     public function create(): View
     {
        return view('pegawai.create');
     }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama_pegawai'     => 'required',
            'nomor_pegawai'     => 'required',
            'tanggal_bergabung'   => 'required',
        ]);
        
        pegawai::create([
            'nama_pegawai'     => $request->nama_pegawai,
            'nomor_pegawai'     => $request->nomor_pegawai,
            'tanggal_bergabung'   => $request->tanggal_bergabung,
        ]);
        
        return redirect()->route('pegawai.index');
    }
}
