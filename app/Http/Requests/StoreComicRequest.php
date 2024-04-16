<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'description' => 'required|max:5000',
            'thumb' => 'required|max:5000',
            'price' => 'nullable',
            'series' => 'required|max:50',

            'artists' => 'nullable',
            'writers' => 'nullable'
        ];
    }

    public function messages(): array {
        return [

            // Per title
            'title.required' => 'Il titolo deve essere inserito, è obbligatorio!',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',

            // Per description
            'description.required' => 'La descrizione deve essere inserita, è obbligatoria!',
            'description.max' => 'La descrizione deve avere massimo :max caratteri',


            // Per thumb
            'thumb.required' => "L'URL dell'immagine dell'immagine del fumetto deve essere inserito, è obbligatorio!",
            'thumb.max' => "L'URL dell'immagine deve avere massimo :max caratteri",

            
            // Per series
            'series.required' => "La serie del fumetto deve essere inserita, è obbligatoria!",
            'series.max' => 'La serie deve avere massimo :max caratteri',

        ];
    }
}
