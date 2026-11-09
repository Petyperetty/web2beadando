<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Mozi; // A modell mappa hozzáadása
use Illuminate\Support\Facades\Auth;

class MoziController extends Controller
{
    public function mozik(){

        // Adatbázis lekérdezés a Mozi modell alapján. Visszaadja az összes sort.
        $mozik = Mozi::all();
        // Visszaadja a mozik tömböt a mozik.blade nézetnek.
        // A compact() függvény egy tömböt állít össze a View-nak a $mozik változóból.
        if(Auth::user()->role == 1)
            return view('crud', compact('mozik'));
        else
            return view('mozik', compact('mozik'));
    }

    public function filmListById(int $id){        
        $mozi = Mozi::findOrFail($id);

        return view('modify', compact('mozi'));
    }

    public function show(int $id){
        $mozi = Mozi::with('filmek')->findOrFail($id);

        return view('mozi_adatlap' ,compact('mozi'));
    }

    public function del(int $id){
        Mozi::findOrFail($id)->delete();

        return redirect()->route('mozik');
    }

    public function modify(int $id, request $request){
        Mozi::findOrFail($id)->update($request->all());

        return redirect()->route('mozik');
    }
}
