<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(){
        $livres= Livre::all();
        return view('livres.index', compact('livres'));
    }

    public function create(){
        return view('livres.create');
    }

    public function store(Request $request){
        $request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'prix' => 'required|numeric'
        ]);

        Livre::create($request->all());
        return redirect()->route('livres.index');
    }
}
