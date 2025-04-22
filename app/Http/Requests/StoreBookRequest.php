<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'book_name' => 'required|string|max:255',
            'writer' => 'required|string|max:255',
            'publishing_house' => 'nullable|string|max:255',
            'publication_date' => 'nullable|date',
            'category' => 'nullable|string|max:255',
            'isbn_no' => 'required|string|unique:books,isbn_no|max:13',
            'page_number' => 'nullable|integer',
            'book_content' => 'nullable|string',
            'book_picture' => 'nullable|string|max:255',
            'book_file' => 'nullable|string|max:255',
        ];
    }
}
