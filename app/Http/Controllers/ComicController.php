<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Comic::all();
        return view('comics.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newFumetto = new Comic();

        /*$newFumetto->title = $data['title'];
        $newFumetto->description = $data['description'];
        $newFumetto->thumb = $data['thumb'];
        $newFumetto->price = $data['price'];
        $newFumetto->series = $data['series'];
        $newFumetto->sale_date = $data['sale_date'];
        $newFumetto->type = $data['type'];*/

        $newFumetto->fill($data);
        $newFumetto->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = Comic::find($id);

        if ($fumetto){

            return view('comics.show', compact('fumetto'));

        }else{
            abort(404);
        }        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fumetto = Comic::find($id);

        if ($fumetto){

            return view('comics.edit', compact('fumetto'));

        }

        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fumetto = Comic::find($id);

        if ($fumetto){

            $data = $request->all();

            $fumetto->update($data);
            $fumetto->save();

            return redirect()->route('comics.show', ['comic' => $fumetto]);


        } else{
 
        abort(404); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fumetto = Comic::find($id);

        if ($fumetto){

            $fumetto->delete();
            return redirect()->route('comics.index');

        } else{
            abort(404);
        }

    }
}
