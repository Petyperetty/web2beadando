<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Mozi; // A modell mappa hozzáadása



class MoziController extends Controller
{
    public function index(){

        // Adatbázis lekérdezés a Mozi modell alapján. Visszaadja az összes sort.
        $mozik = Mozi::all();
        // Visszaadja a mozik tömböt a mozik.blade nézetnek.
        // A compact() függvény egy tömböt állít össze a View-nak a $mozik változóból.
        return view('mozik', compact('mozik'));
    }

    public function show(int $id){
        $mozi = Mozi::with('filmek')->findOrFail($id);

        return view('mozi_adatlap' ,compact('mozi'));
    }
}
