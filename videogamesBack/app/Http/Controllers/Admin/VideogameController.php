<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use App\Models\SoftwareHouse;
use Illuminate\Http\Request;

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
        return view('videogames.create', compact('softwareHouses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $videogame                    = new Videogame();
        $videogame->title             = $data['title'];
        $videogame->description       = $data['description'];
        $videogame->release_date      = $data['release_date'];
        $videogame->price             = $data['price'];
        $videogame->software_house_id = $data['software_house_id'];
        $videogame->save();

        return redirect()->route('videogames.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        return view('videogames.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        $softwareHouses = SoftwareHouse::all();
        return view('videogames.edit', compact('videogame', 'softwareHouses'));
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
        $videogame->save();

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
