<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
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
    public function store(StoreComicRequest $request)
    {
        $request->validated();

        $newComic = new Comic();

        $newComic->fill($request->all());

        // Compilazione pre fillable:
        // $newComic->title = $request->title;
        // $newComic->description = $request->description;
        // $newComic->series = $request->series;
        // $newComic->thumb = $request->thumb;
        // $newComic->price = $request->price;
        // $newComic->artists = $request->artists;
        // $newComic->writers = $request->writers;

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
    public function update(StoreComicRequest $request, Comic $comic)
    {
        $request->validated();

        $comic->fill($request->all());

        // Compilazione pre fillable:
        // $comic->title = $request->title;
        // $comic->description = $request->description;
        // $comic->series = $request->series;
        // $comic->thumb = $request->thumb;
        // $comic->price = $request->price;
        // $comic->artists = $request->artists;
        // $comic->writers = $request->writers;

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
}
