<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Services\Menu\MenuService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService) {
        $this->menuService = $menuService;  
    }

    public function create() {
        return view('admin.menu.add', [
            'title' => 'Thêm danh mục',
            'menus' => $this->menuService->getParent()
        ]);
    }

    public function store(CreateFormRequest $request) {

        $result = $this->menuService->create($request);
        return redirect()->back();

    }

    public function listidx() {
        return view('admin.menu.list', [
            'title' => 'Danh Sách Danh Mục Mới Nhất',
            'menus' => $this->menuService->getAll()
        ]);
    }

    public function show(Menu $menu) {
        dd($menu->name);
        return view('admin.menu.edit', [
            'title' => 'Chỉnh sửa Danh Mục' . $menu->name,
            'menus' => $menu
        ]);
    }

    public function destroyidx(Request $request) {
        $result = $this->menuService->destroy($request);
    }
}
