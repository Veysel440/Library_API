<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Service\MenuServiceInterface;
use Illuminate\Http\JsonResponse;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuServiceInterface $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index(): JsonResponse
    {
        $menus = $this->menuService->getAllMenus();
        return response()->json($menus);
    }

    public function show(int $id): JsonResponse
    {
        $menu = $this->menuService->getMenuById($id);
        return response()->json($menu);
    }

    public function store(StoreMenuRequest $request): JsonResponse
    {
        $menu = $this->menuService->createMenu($request->validated());
        return response()->json($menu, 201);
    }

    public function update(UpdateMenuRequest $request, int $id): JsonResponse
    {
        $menu = $this->menuService->updateMenu($id, $request->validated());
        return response()->json($menu);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->menuService->deleteMenu($id);
        return response()->json(null, 204);
    }
}
