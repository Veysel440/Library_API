<?php

namespace App\Service;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;

interface MenuServiceInterface
{
    public function getAllMenus(): Collection;
    public function getMenuById(int $id): ?Menu;
    public function createMenu(array $data): Menu;
    public function updateMenu(int $id, array $data): Menu;
    public function deleteMenu(int $id): bool;
}
