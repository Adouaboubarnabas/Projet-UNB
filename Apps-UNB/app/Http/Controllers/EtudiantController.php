<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('home', compact('etudiants'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("etudiant.create");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'nom' => 'required | max:255',
            'prenom' => 'required | max:255',
            'email' => 'required | max:255',
            'matricule' => 'required | max:255',
            'cycle' => 'required | max:255',
            'niveau_etude' => 'required | max:255',
            'annee_academique' => 'required | max:255',
            'photo' => 'required',
        ]);
        $img_path = $request->file('photo')->store('images');
        Etudiant::create([
            'nom' => $request->nom,
            'prenom' =>$request->prenom, 
            'email' =>$request->email, 
            'matricule' =>$request->matricule, 
            'cycle' =>$request->cycle, 
            'niveau_etude' =>$request->niveau_etude, 
            'annee_academique' =>$request->annee_academique, 
            'photo' => $img_path,
        ]);
        // return redirect()->route('home');
        return back()->with('success', 'Etudiant ajouté avec succès');
    }
};
