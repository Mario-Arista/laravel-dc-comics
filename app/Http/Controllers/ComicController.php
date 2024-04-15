<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Richiamo funzione validation
        $this->validation($request->all());

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->series = $request->series;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // Richiamo funzione validation
        $this->validation($request->all());

        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->series = $request->series;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data) {

        $validator = Validator::make($data, 
        [
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'nullable',
            'series' => 'required|max:50',

            // sale_date & type non sono presenti nei dati 
            // quindi non li richiamo
            // 'sale_date' => 'nullable|max:50',
            // 'type' => 'nullable|max:50',

            'artists' => 'nullable',
            'writers' => 'nullable'
        ],
        [
            // Per price, artists, writers
            // Non inserisco specifiche perchè nullable

            // Per title
            'title.required' => 'Il titolo deve essere inserito, è obbligatorio!',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',

            // Per description
            'description.required' => 'La descrizione deve essere inserita, è obbligatoria!',

            // Per thumb
            'thumb.required' => "Il link dell'immagine del fumetto deve essere inserito, è obbligatorio!",
            
            // Per series
            'series.required' => "La serie del fumetto deve essere inserita, è obbligatoria!",
            'series.max' => 'La serie deve avere massimo :max caratteri',

        ])->validate();

    }
}
