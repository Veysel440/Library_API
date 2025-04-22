<?php

namespace App\Service;

use App\Models\Communication;
use Illuminate\Database\Eloquent\Collection;

class CommunicationService implements CommunicationServiceInterface
{
    public function getAllCommunications(): Collection
    {
        return Communication::all();
    }

    public function getCommunicationById(int $id): ?Communication
    {
        return Communication::findOrFail($id);
    }

    public function createCommunication(array $data): Communication
    {
        return Communication::create($data);
    }

    public function updateCommunication(int $id, array $data): Communication
    {
        $communication = Communication::findOrFail($id);
        $communication->update($data);
        return $communication;
    }

    public function deleteCommunication(int $id): bool
    {
        $communication = Communication::findOrFail($id);
        return $communication->delete();
    }
}
