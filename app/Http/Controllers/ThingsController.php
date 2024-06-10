<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class ThingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('things.index', [
            'heading'=> 'Things list',
            'things'=> Thing::orderBy('updated_at', 'desc')->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('things.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request , [
            'name'=> 'required|unique:things,name',
            'wrnt'=> 'date',
            'creator'=> 'required|exists:users,name'
            ]); 
        $thing = new Thing;
        $thing->name = $request->name;
        $thing->description = $request->description;
        $thing->wrnt = $request->wrnt;
        $thing->creator = $request->creator;
        $thing->dimension = '';
        $thing->save();
        return redirect('/things')->with('success','Thing created');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('things.show', [
            'thing'=> Thing::find($id)
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
