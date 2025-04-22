<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'book_name' => 'sometimes|string|max:255',
            'writer' => 'sometimes|string|max:255',
            'publishing_house' => 'nullable|string|max:255',
            'publication_date' => 'nullable|date',
            'category' => 'nullable|string|max:255',
            'isbn_no' => 'sometimes|string|unique:books,isbn_no,' . $this->book->id . '|max:13',
            'page_number' => 'nullable|integer',
            'book_content' => 'nullable|string',
            'book_picture' => 'nullable|string|max:255',
            'book_file' => 'nullable|string|max:255',
        ];
    }
}
