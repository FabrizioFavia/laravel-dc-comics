<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:5|max:255",
            "description" => "max:65535",
            "thumb" => "required|min:5|max:65535",
            "price" => "required|min:5",
            "series" => "required|min:5|max:255",
            "sale_date" => "max:10",
            "type" => "required|min:5|max:30",
            "artists" => "required|min:10|max:255",
            "writers" => "required|min:10|max:255",
        ];
    }

    public function messages(){
        return [
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
        ];
    }
}
