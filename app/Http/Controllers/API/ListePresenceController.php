<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ListePresence;
use Illuminate\Http\Request;

class ListePresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liste = ListePresence::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($liste);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $liste = ListePresence::create([
            'seance_id' => $request->seance_id,
            'nom' => $request->nom,
            'date' => now(),
            
        ]);
    return response()->json($liste, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListePresence  $listePresence
     * @return \Illuminate\Http\Response
     */
    public function show(ListePresence $listePresence)
    {
        return response()->json($listePresence);
        
    }
    public function showBySeance($seanceid)
    {
        // dd($seanceid);
        $liste=ListePresence::where('seance_id',$seanceid)->get();
        return response()->json($liste);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListePresence  $listePresence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListePresence $listePresence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListePresence  $listePresence
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListePresence $listePresence)
    {
        $listePresence->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
