<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('places.index', [
            'heading'=> 'Places list',
            // 'places'=> Place::all()
            'places'=> Place::orderBy('updated_at', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('places.create', [
            // 'places'=> Place::all()
            // 'places'=> Place::orderBy('id', 'asc')->paginate(5)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request , [
            'name'=> 'required|unique:places,name',
            'repair'=> 'boolean',
            'work'=> 'boolean'
            ]); 
        $place = new Place;
        $place->name = $request->name;
        $place->description = $request->description;
        $place->repair = $request->boolean($request->repair);
        $place->work = $request->boolean($request->work);
        $place->save();
        return redirect('/places')->with('success','Place created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('places.show', [
            'place'=> Place::find($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
