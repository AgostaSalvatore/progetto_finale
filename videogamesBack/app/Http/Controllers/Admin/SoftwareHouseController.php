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

        $newSoftwareHouse               = new SoftwareHouse();
        $newSoftwareHouse->name         = $data['name'];
        $newSoftwareHouse->founded_year = $data['founded_year'];
        $newSoftwareHouse->country      = $data['country'];
        $newSoftwareHouse->website      = $data['website'];
        $newSoftwareHouse->description  = $data['description'];
        $newSoftwareHouse->logo         = $data['logo'];
        $newSoftwareHouse->save();

        return redirect()->route('softwarehouses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SoftwareHouse $softwarehouse)
    {
        return view('softwarehouses.show', compact('softwarehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoftwareHouse $softwarehouse)
    {
        return view('softwarehouses.edit', compact('softwarehouse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SoftwareHouse $softwarehouse)
    {
        $data = $request->all();

        $softwarehouse->name         = $data['name'];
        $softwarehouse->founded_year = $data['founded_year'];
        $softwarehouse->country      = $data['country'];
        $softwarehouse->website      = $data['website'];
        $softwarehouse->description  = $data['description'];
        $softwarehouse->logo         = $data['logo'];
        $softwarehouse->save();

        return redirect()->route('softwarehouses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoftwareHouse $softwarehouse)
    {
        $softwarehouse->delete();
        return redirect()->route('softwarehouses.index');
    }
}
