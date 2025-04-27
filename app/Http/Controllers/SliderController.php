<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Service\SliderServiceInterface;
use Illuminate\Http\JsonResponse;

class SliderController extends Controller
{
    protected $sliderService;

    public function __construct(SliderServiceInterface $sliderService)
    {
        $this->sliderService = $sliderService;

    }

    public function index(): JsonResponse
    {
        $sliders = $this->sliderService->getAllSliders();
        return response()->json($sliders);
    }

    public function show(int $id): JsonResponse
    {
        $slider = $this->sliderService->getSliderById($id);
        return response()->json($slider);
    }

    public function store(StoreSliderRequest $request): JsonResponse
    {
        $slider = $this->sliderService->createSlider($request->validated());
        return response()->json($slider, 201);
    }

    public function update(UpdateSliderRequest $request, int $id): JsonResponse
    {
        $slider = $this->sliderService->updateSlider($id, $request->validated());
        return response()->json($slider);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->sliderService->deleteSlider($id);
        return response()->json(null, 204);
    }
}
