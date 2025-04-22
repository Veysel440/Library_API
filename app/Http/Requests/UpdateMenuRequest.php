<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'menu_name' => 'sometimes|string|max:255',
            'url' => 'sometimes|string|max:255',
        ];
    }
}
