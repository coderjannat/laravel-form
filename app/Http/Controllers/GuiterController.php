<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Requests\GuitarFormRequest;

class GuiterController extends Controller
{
    private static function getData()
    {
        return [
            ['id' => 1, 'name' => 'Americana', 'brand' => 'feder'],
            ['id' => 2, 'name' => 'loma', 'brand' => 'med'],
            ['id' => 3, 'name' => 'mona', 'brand' => 'ked'],
            ['id' => 3, 'name' => 'pina', 'brand' => 'ped'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show data
        return view('guitars.index', [
            'guitars' => Guitar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuitarFormRequest $request)
    {
        // validating data
        // I do that validating in common folder which is GuitarFormRequest
        $data = $request->validated();

        //post from user
        // $guitar = new Guitar();
        // $guitar->name = $data['guitar-name'];
        // $guitar->brand = $data['brand'];
        // $guitar->year_made = $data['year_made'];

        // $guitar->save();

        Guitar :: create($data);

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        //show specific data

        return view('guitars.show', [
            'guitar' => $guitar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        //
        return view('guitars.edit', [
            'guitar' => $guitar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GuitarFormRequest $request, Guitar $guitar)
    {
        // validating data
        $data = $request->validated();

        // $guitar->name = $data['guitar-name'];
        // $guitar->brand = $data['brand'];
        // $guitar->year_made = $data['year_made'];

        // $guitar->save();
        $guitar->update($data);

        return redirect()->route('guitars.show', $guitar->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
