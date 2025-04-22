<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommunicationRequest;
use App\Http\Requests\UpdateCommunicationRequest;
use App\Service\CommunicationServiceInterface;
use Illuminate\Http\JsonResponse;

class CommunicationController extends Controller
{
    protected $communicationService;

    public function __construct(CommunicationServiceInterface $communicationService)
    {
        $this->communicationService = $communicationService;
    }

    public function index(): JsonResponse
    {
        $communications = $this->communicationService->getAllCommunications();
        return response()->json($communications);
    }

    public function show(int $id): JsonResponse
    {
        $communication = $this->communicationService->getCommunicationById($id);
        return response()->json($communication);
    }

    public function store(StoreCommunicationRequest $request): JsonResponse
    {
        $communication = $this->communicationService->createCommunication($request->validated());
        return response()->json($communication, 201);
    }

    public function update(UpdateCommunicationRequest $request, int $id): JsonResponse
    {
        $communication = $this->communicationService->updateCommunication($id, $request->validated());
        return response()->json($communication);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->communicationService->deleteCommunication($id);
        return response()->json(null, 204);
    }
}
