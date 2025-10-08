<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\SoftwareHouse;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::all();
        return view('videogames.index', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $softwareHouses = SoftwareHouse::all();
        $genres         = Genre::all();
        return view('videogames.create', compact('softwareHouses', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newVideogame                    = new Videogame();
        $newVideogame->title             = $data['title'];
        $newVideogame->description       = $data['description'];
        $newVideogame->release_date      = $data['release_date'];
        $newVideogame->price             = $data['price'];
        $newVideogame->software_house_id = $data['software_house_id'];

        if (array_key_exists('cover_image', $data)) {
            $img_path                  = Storage::putFile('cover_images', $data['cover_image']);
            $newVideogame->cover_image = $img_path;
        }

        $newVideogame->save();

        if ($request->has('genre')) {
            $newVideogame->genres()->attach($data['genre']);
        }

        return redirect()->route('videogames.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        $videogame->load(['genres', 'softwareHouse']);
        return view('videogames.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        $softwareHouses = SoftwareHouse::all();
        $genres         = Genre::all();
        return view('videogames.edit', compact('videogame', 'softwareHouses', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->all();

        $videogame->title             = $data['title'];
        $videogame->description       = $data['description'];
        $videogame->release_date      = $data['release_date'];
        $videogame->price             = $data['price'];
        $videogame->software_house_id = $data['software_house_id'];

        if ($request->hasFile('cover_image')) {
            // Cancella l'immagine precedente solo se ne viene caricata una nuova
            if ($videogame->cover_image) {
                Storage::delete($videogame->cover_image);
            }
            $img_path               = Storage::putFile('cover_images', $request->file('cover_image'));
            $videogame->cover_image = $img_path;
        }

        $videogame->update();

        if ($request->has('genre')) {
            $videogame->genres()->sync($data['genre']);
        } else {
            $videogame->genres()->detach();
        }

        return redirect()->route('videogames.show', $videogame);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();
        return redirect()->route('videogames.index');
    }
}
