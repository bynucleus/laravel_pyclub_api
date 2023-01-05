<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $note = Note::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($note);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = Note::create([
            'seance_id' => $request->seance_id,
            'nom' => $request->nom,
            'titre' => $request->titre,
            'contenu' => $request->contenu,
         

        ]);
    return response()->json($note, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        return response()->json($note);
        
    }

    public function showBySeance($seanceid)
    {
        // dd($seanceid);
        $notes=Note::where('seance_id',$seanceid)->get();
        return response()->json($notes);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
