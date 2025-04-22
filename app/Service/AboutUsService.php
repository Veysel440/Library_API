<?php

namespace App\Service;

use App\Models\About_Us;
use Illuminate\Database\Eloquent\Collection;

class AboutUsService implements AboutUsServiceInterface
{
    public function getAllAboutUs(): Collection
    {
        return About_Us::all();
    }

    public function getAboutUsById(int $id): ?About_Us
    {
        return About_Us::findOrFail($id);
    }

    public function createAboutUs(array $data): About_Us
    {
        return About_Us::create($data);
    }

    public function updateAboutUs(int $id, array $data): About_Us
    {
        $aboutUs = About_Us::findOrFail($id);
        $aboutUs->update($data);
        return $aboutUs;
    }

    public function deleteAboutUs(int $id): bool
    {
        $aboutUs = About_Us::findOrFail($id);
        return $aboutUs->delete();
    }
}
