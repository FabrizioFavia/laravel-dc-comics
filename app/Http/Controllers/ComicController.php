<?php

namespace App\Http\Controllers;
use App\Models\Comic;
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
       $comics = Comic::all();
       return view('index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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

        $newComic = new Comic();
            $newComic->title = $data['title'];
            $newComic->description = $data['description'];
            $newComic->thumb = $data['thumb'];
            $newComic->price = $data['price'];
            $newComic->series = $data['series'];
            $newComic->sale_date = $data['sale_date'];
            $newComic->type = $data['type'];
            $newComic->artists = "";
            $newComic->writers = "";
            $newComic->save();

            return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

       
            $comic->title = $data['title'];
            $comic->description = $data['description'];
            $comic->thumb = $data['thumb'];
            $comic->price = $data['price'];
            $comic->series = $data['series'];
            $comic->sale_date = $data['sale_date'];
            $comic->type = $data['type'];
            $comic->artists = "";
            $comic->writers = "";
            $comic->update();

            return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
