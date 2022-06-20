<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:etudiant-list|etudiant-create|etudiant-edit|etudiant-delete', ['only' => ['index','show']]);
         $this->middleware('permission:etudiant-create', ['only' => ['create','store']]);
         $this->middleware('permission:etudiant-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:etudiant-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant ::latest()->paginate(5);
        return view('etudiants.index',compact('etudiant'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiants.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        Etudiant::create($request->all());
    
        return redirect()->route('etudiants.index')
                        ->with('success','Etudiant created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiants)
    {
        return view('etudiants.show',compact('etudiant'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiants)
    {
        return view('etudiants.edit',compact('etudiant'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiants)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $etudiants->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Etudiant updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiants)
    {
        $etudiants->delete();
    
        return redirect()->route('etudiants.index')
                        ->with('success','Etudiant deleted successfully');
    }
}
