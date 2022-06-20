<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Etudiant;
=======
>>>>>>> 47649f2e1b01ac86a6d090d54e897d740c5c6ba2
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.index', compact('etudiants'));
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant.create');
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
            'photo' => 'required | max:255',
        ]);
        Etudiant::create($storeData);
        return redirect()->route('etudiant.index')->with('success', 'Etudiant ajouté avec succès');
    }
=======
    //
>>>>>>> 47649f2e1b01ac86a6d090d54e897d740c5c6ba2
}
