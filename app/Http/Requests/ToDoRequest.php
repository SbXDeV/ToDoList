<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class ToDoRequest extends FormRequest
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
              'name' => 'required|min:5|max:50',
              'body' => 'required|min:5|max:50',
              'locate' => 'required|min:5|max:50'
        ];
    }
    public function attributes() {
      return [
        'name' => ' names',
        'body' => ' contents',
        'locate' => ' locates'
      ];
    }
    public function messages() {
      return [
        'name.required' => "Поле имени является обязательным!",
        'body.required' => "Поле описания является обязательным!",
        'locate.required' => "Поле местонахождения является обязательным!"
      ];
    }
}
