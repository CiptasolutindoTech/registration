<?php

namespace App\Http\Controllers;

//import model Regristation
use App\Models\Registration; 

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\Request;

//import Http Request
use Illuminate\Http\RedirectResponse;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

class RegristrationController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
         $regristation = Registration::latest()->paginate(10);

        //render view with registation
        return view('regristation.index');
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('regristation.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|',
            'jenis_kelamin',
            'alamat',
            'perusahaan',
            'email',
            'telepon',
            'asisteninstruktur',
            'instruktur',
            'instruktursenior',
            'mastertrainer',
        ]);

        dd($request->all());
    
        //create 
        Registration::create([
            'name'          => $request->name,
            'jenis_kelamin'        => $request->jenis_kelamin,
            'alamat'  => $request->alamat,
            'perusahaan'       => $request->perusahaan,
            'email'         => $request->email,
            'telepon' => $request->telepon,
            'asisteninstruktur'  => $request->asisteninstruktur,
            'instruktur'  => $request->instruktur,
            'instruktursenior'  => $request->instruktursenior,
            'mastertrainer'  => $request->mastertrainer,

        ]);

        // Simpan data atau logika lainnya
        return redirect()->back()->with('success', 'Registrasi berhasil');
    } 
}