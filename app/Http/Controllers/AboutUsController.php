<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use App\Service\AboutUsServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class AboutUsController extends Controller
{
    protected $aboutUsService;

    public function __construct(AboutUsServiceInterface $aboutUsService)
    {
        $this->aboutUsService = $aboutUsService;
    }

    public function index(): JsonResponse
    {
        $aboutUs = $this->aboutUsService->getAllAboutUs();
        return response()->json($aboutUs);
    }

    public function show(int $id): JsonResponse
    {
        $aboutUs = $this->aboutUsService->getAboutUsById($id);
        return response()->json($aboutUs);
    }

    public function store(StoreAboutUsRequest $request): JsonResponse
    {
        $aboutUs = $this->aboutUsService->createAboutUs($request->validated());
        return response()->json($aboutUs, 201);
    }

    public function update(UpdateAboutUsRequest $request, int $id): JsonResponse
    {
        $aboutUs = $this->aboutUsService->updateAboutUs($id, $request->validated());
        return response()->json($aboutUs);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->aboutUsService->deleteAboutUs($id);
        return response()->json(null, 204);
    }
}
