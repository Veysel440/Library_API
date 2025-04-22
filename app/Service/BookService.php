<?php

namespace App\Service;

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;

class BookService implements BookServiceInterface
{
    public function getAllBooks(): Collection
    {
        return Book::all();
    }

    public function getBookById(int $id): ?Book
    {
        return Book::findOrFail($id);
    }

    public function createBook(array $data): Book
    {
        return Book::create($data);
    }

    public function updateBook(int $id, array $data): Book
    {
        $book = Book::findOrFail($id);
        $book->update($data);
        return $book;
    }

    public function deleteBook(int $id): bool
    {
        $book = Book::findOrFail($id);
        return $book->delete();
    }
}
