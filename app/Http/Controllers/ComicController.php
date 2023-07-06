<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    private function validateComics($data)
    {
        $validator = Validator::make($data, [
            "title" => "required|min:5|max:255",
            "description" => "max:65535",
            "thumb" => "required|min:5|max:65535",
            "price" => "required|min:5",
            "series" => "required|min:5|max:255",
            "sale_date" => "max:10",
            "type" => "required|min:5|max:30",
            "artists" => "required|min:10|max:255",
            "writers" => "required|min:10|max:255",
        ], [
            "title.required" => "Il titolo è richiesto",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",
            "title.max" => "Il titolo non può superare i :max caratteri",

            "description.min" => "La descrizione deve essere almeno di :min caratteri",
            "description.max" => "La descrizione non può superare i :max caratteri",

            "thumb.required" => "L'immagine è richiesta",
            "thumb.min" => "L'immagine deve essere almeno di :min caratteri",
            "thumb.max" => "L'immagine non può superare i :max caratteri",

            "price.required" => "Il prezzo è richiesto",
            "price.min" => "Il prezzo deve essere almeno di :min caratteri",
            "price.max" => "Il prezzo non può superare i :max caratteri",

            "series.required" => "La serie è richiesta",
            "series.min" => "La serie deve essere almeno di :min caratteri",
            "series.max" => "La serie non può superare i :max caratteri",

            "sale_date.min" => "La data deve essere almeno di :min caratteri",
            "sale_date.max" => "La data non può superare i :max caratteri",

            "type.required" => "Il tipo è richiesto",
            "type.min" => "Il tipo deve essere almeno di :min caratteri",
            "type.max" => "Il tipo non può superare i :max caratteri",

            "artists.required" => "L'artista è richiesto",
            "artists.min" => "L'artista deve essere almeno di :min caratteri",
            "artists.max" => "L'artista non può superare i :max caratteri",

            "writers.required" => "Lo scrittore è richiesto",
            "writers.min" => "Lo scrittore deve essere almeno di :min caratteri",
            "writers.max" => "Lo scrittore non può superare i :max caratteri",
        ])->validate();

        return $validator;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* VALIDAZIONE CAMPI */
        /* $request->validate([
            "title" => "required|min:5|max:255",
            "description" => "max:65535",
            "thumb" => "required|min:5|max:65535",
            "price" => "required|min:5",
            "series" => "required|min:5|max:255",
            "sale_date" => "max:10",
            "type" => "required|min:5|max:30",
            "artists" => "required|min:10|max:255",
            "writers" => "required|min:10|max:255",
            $data = $request->all();
        ]); */

        $data = $this->validateComics($request->all());

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

        $data = $this->validateComics($request->all());

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
