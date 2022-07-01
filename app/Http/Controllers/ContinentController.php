<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ContinentFormRequest;
use App\Models\Continent;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continents = Continent::paginate(3);
        return view ('continents.index', compact('continents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('continents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ContinentFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContinentFormRequest $request)
    {
        $input = $request->all();
        Continent::create($input);
        Session::flash('success', 'Continent Added!');
        return redirect('continents');
        // Marque::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $continent = Continent::find($id);
        return view('continents.show')->with('continents', $continent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $continent = Continent::find($id);
        return view('continents.edit')->with('continents', $continent);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContinentFormRequest $request, $id)
    {
        $continent = Continent::find($id);
        $input = $request->all();
        $continent->update($input);
        Session::flash('success', 'Continent Updated!');
        return redirect('continents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Continent::destroy($id);
        Session::flash('success', 'Continent deleted!!');
        return redirect('continents');
    }
}

