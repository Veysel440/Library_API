<?php

namespace App\Service;

use App\Models\About_Us;
use Illuminate\Database\Eloquent\Collection;

interface AboutUsServiceInterface
{
    public function getAllAboutUs(): Collection;
    public function getAboutUsById(int $id): ?About_Us;
    public function createAboutUs(array $data): About_Us;
    public function updateAboutUs(int $id, array $data): About_Us;
    public function deleteAboutUs(int $id): bool;
}
