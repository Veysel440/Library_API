<?php

namespace App\Service;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Collection;

interface SliderServiceInterface
{
    public function getAllSliders(): Collection;
    public function getSliderById(int $id): ?Slider;
    public function createSlider(array $data): Slider;
    public function updateSlider(int $id, array $data): Slider;
    public function deleteSlider(int $id): bool;
}
