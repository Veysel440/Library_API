<?php

namespace App\Service;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Collection;

class SliderService implements SliderServiceInterface
{
    public function getAllSliders(): Collection
    {
        return Slider::all();
    }

    public function getSliderById(int $id): ?Slider
    {
        return Slider::findOrFail($id);
    }

    public function createSlider(array $data): Slider
    {
        return Slider::create($data);
    }

    public function updateSlider(int $id, array $data): Slider
    {
        $slider = Slider::findOrFail($id);
        $slider->update($data);
        return $slider;
    }

    public function deleteSlider(int $id): bool
    {
        $slider = Slider::findOrFail($id);
        return $slider->delete();
    }
}
