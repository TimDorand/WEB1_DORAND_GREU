<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BapProjetRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'         => 'required|min:10',
            'descriptif'   => 'required|min:10',
            'context'   => 'required|min:10',
            'objectif'   => 'required|min:10',
            'contrainte'   => 'required|min:10'
        ];
    }
    public function messages()
    {
        return [
            'name.required'        => 'Le nom de projet obligatoire',
            'descriptif.required'  => 'Description requise',
            'context.required'  => 'Contexte requise',
            'objectif.required'  => 'Objectif requise',
            'contrainte.required'  => 'Contrainte requise',
            'name.min'              => 'Le nom du projet doit être > 10 caractères',
            'descriptif.min'       => 'Le descriptif doit être > 10 caractère',
            'context.min'       => 'Le contexte doit être > 10 caractère',
            'contrainte.min'       => 'Le contrainte doit être > 10 caractère'
        ];
    }
}
