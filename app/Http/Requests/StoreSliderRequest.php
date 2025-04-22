<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'main_title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
        ];
    }
}
