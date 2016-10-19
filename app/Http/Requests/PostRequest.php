<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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
			'titre_fr' => 'required|max:80',
			'contenu_fr' => 'required',
            'titre_en' => 'required|max:80',
			'contenu_en' => 'required',
            'titre_es' => 'required|max:80',
			'contenu_es' => 'required',
            'titre_pt' => 'required|max:80',
			'contenu_pt' => 'required',
            'titre_de' => 'required|max:80',
			'contenu_de' => 'required',
            'titre_it' => 'required|max:80',
			'contenu_it' => 'required',
            'image' => 'required|image',
		];
	}
}
