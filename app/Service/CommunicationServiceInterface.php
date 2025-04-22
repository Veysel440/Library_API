<?php

namespace App\Service;

use App\Models\Communication;
use Illuminate\Database\Eloquent\Collection;

interface CommunicationServiceInterface
{
    public function getAllCommunications(): Collection;
    public function getCommunicationById(int $id): ?Communication;
    public function createCommunication(array $data): Communication;
    public function updateCommunication(int $id, array $data): Communication;
    public function deleteCommunication(int $id): bool;
}
