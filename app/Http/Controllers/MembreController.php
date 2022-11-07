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
        $membres= Membre::take(15)->get()->where('genre','=' ,'Masculin');
        return view('pages.hommes', compact('membres'));
    }
    public function delete (Membre $id){
            $id->delete();
            return redirect('home');
    }
}
