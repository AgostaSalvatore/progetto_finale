<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SoftwareHouse;
use Illuminate\Http\Request;

class SoftwareHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $softwareHouses = SoftwareHouse::all();
        return view('softwarehouses.index', compact('softwareHouses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('softwarehouses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $softwareHouse               = new SoftwareHouse();
        $softwareHouse->name         = $data['name'];
        $softwareHouse->founded_year = $data['founded_year'];
        $softwareHouse->country      = $data['country'];
        $softwareHouse->website      = $data['website'];
        $softwareHouse->description  = $data['description'];
        $softwareHouse->logo         = $data['logo'];
        $softwareHouse->save();

        return redirect()->route('softwarehouses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SoftwareHouse $softwareHouse)
    {
        return view('softwarehouses.show', compact('softwareHouse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoftwareHouse $softwareHouse)
    {
        $softwareHouses = SoftwareHouse::all();
        return view('softwarehouses.edit', compact('softwareHouse', 'softwareHouses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SoftwareHouse $softwareHouse)
    {
        $data = $request->all();

        $softwareHouse->name         = $data['name'];
        $softwareHouse->founded_year = $data['founded_year'];
        $softwareHouse->country      = $data['country'];
        $softwareHouse->website      = $data['website'];
        $softwareHouse->description  = $data['description'];
        $softwareHouse->logo         = $data['logo'];
        $softwareHouse->save();

        return redirect()->route('softwarehouses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoftwareHouse $softwareHouse)
    {
        $softwareHouse->delete();
        return redirect()->route('softwarehouses.index');
    }
}
