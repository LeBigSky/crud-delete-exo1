<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function store (Request $request){
        $store= New Membre();
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->genre = $request->genre;
        $store->save();
        return redirect('/');
    }
    public function membres (){
        $membres= Membre::all();
        return view ('home', compact('membres'));
    }
    public function create (){
        return view('pages.create');
    }
    public function femmes (){
        $membres= Membre::all()->where('genre','=' ,'feminin'); 

        return view('pages.femmes', compact('membres'));
    }
    public function hommes (){
        $total= Membre::where('genre', '=', 'Masculin')->count();
        $membres= Membre::take(15)->where('genre','=' ,'Masculin')->get();
        return view('pages.hommes', compact('membres', 'total'));
    }
    public function delete (Membre $id){
            $id->delete();
            return redirect('/');
    }
}
