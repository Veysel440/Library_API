<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Service\BookServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookServiceInterface $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index(): JsonResponse
    {
        $books = $this->bookService->getAllBooks();
        return response()->json($books);
    }

    public function show(int $id): JsonResponse
    {
        $book = $this->bookService->getBookById($id);
        return response()->json($book);
    }

    public function store(StoreBookRequest $request): JsonResponse
    {
        $book = $this->bookService->createBook($request->validated());
        return response()->json($book, 201);
    }

    public function update(UpdateBookRequest $request, int $id): JsonResponse
    {
        $book = $this->bookService->updateBook($id, $request->validated());
        return response()->json($book);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->bookService->deleteBook($id);
        return response()->json(null, 204);
    }
}
