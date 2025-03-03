<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poster; 
use App\Models\Galeri; 

class WelcomeController extends Controller
{
    public function index()
    {
        $posters = Poster::all(); // Ambil semua data poster dari database
        $galleries = Galeri::all(); // Ambil semua data galeri dari database

        return view('welcome', compact('galleries', 'posters'));
    }
}
