<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //!!!ДЛЯ РАБОТЫ ВАЛИДАЦИИ УСТАНОВИТЬ ЗНАЧЕНИЕ "ПРАВДА"
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'foto' => 'required|image|dimensions:width=600,height=800',
            'old_price' => 'required',
            'price' => 'required',
            'sale' => 'required',
            'address' => 'required',
            'tel' => 'required',
            'desc' => 'required',
        ];
    }

    public function messages()  // МЕТОД ДОБАВЛЯЕТСЯ ВРУЧНУЮ. ДЛЯ СОБСТВЕННЫХ ОПОВЕЩЕНИЙ ОБ ОШИБКАХ
    {
        return [
            'name.required' => 'Поле название не заполнено!',
            'foto.required' => 'Картинка не добавлена!',
            'foto.image' => 'Не корректный формат, обратитесь к администрации.',
            'foto.dimensions' => 'Ширина должна быть 600px, а высота 800px',
            'old_price.required' => 'Поле старая цена не заполнено!',
            'price.required' => 'Поле цена не заполнено!',
            'sale.required' => 'Поле скидка не заполнено!',
            'address.required' => 'Поле адресс не заполнено!',
            'tel.required' => 'Поле телефон не заполнено!',
            'desc.required' => 'Поле описание не заполнено!',
        ];
    }
}
