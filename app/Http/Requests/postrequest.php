<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postrequest extends FormRequest
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
            //
            'title'=>'required|min:10|unique:posts',
            'content'=>'required|min:50'
        ];
     
    }
    public function messages()
    {
        return[
            'title.required'=> 'اكتب اى شىء فى العنوان ',
            'content.required'=> 'اكتب اى شىء  ',
            'title.min'=>'خليك اكتر من 10 حروف',
            'title.unique'=>'ما تكررش كلامك',
            'content.min'=>'اكتب اكتر من 50 حرف'


        ];
    }
}