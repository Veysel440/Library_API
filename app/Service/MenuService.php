<?php

namespace App\Service;


use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;

class MenuService implements MenuServiceInterface
{
    public function getAllMenus(): Collection
    {
        return Menu::all();
    }

    public function getMenuById(int $id): ?Menu
    {
        return Menu::findOrFail($id);
    }

    public function createMenu(array $data): Menu
    {
        return Menu::create($data);
    }

    public function updateMenu(int $id, array $data): Menu
    {
        $menu = Menu::findOrFail($id);
        $menu->update($data);
        return $menu;
    }

    public function deleteMenu(int $id): bool
    {
        $menu = Menu::findOrFail($id);
        return $menu->delete();
    }
}
