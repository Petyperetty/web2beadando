<?php

namespace App\Http\Controllers;

use App\Models\Uzenet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UzenetekController extends Controller
{
    public function store(Request $request){

        Uzenet::create([
            'user_id' => Auth::id(),
            'guest_email' => $request->guest_email,
            'targy' => $request->targy,
            'szoveg' => $request->szoveg
        ]);
       
        return redirect()->route('fooldal')->with('status', 'Sikeres üzenetküldés!');
    }

    public function show(){

        $uzenetek = Uzenet::all();

        return view('uzenetek', compact('uzenetek'));
    }
}
