<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTestRequest extends FormRequest
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
            'tresc_zadania' => 'required',
            'odpowiedz_a' => 'required',
            'odpowiedz_b' => 'required',
            'odpowiedz_c' => 'required',
            'odpowiedz_d' => 'required',
            'poprawna_odpowiedz' => 'required',
            


        ];
    }
}
