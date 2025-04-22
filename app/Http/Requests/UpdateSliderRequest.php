<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'main_title' => 'sometimes|string|max:255',
            'sub_title' => 'sometimes|string|max:255',
            'image' => 'nullable|string|max:255',
        ];
    }
}
