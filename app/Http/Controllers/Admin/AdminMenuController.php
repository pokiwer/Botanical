<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $status = $request->has('menustatus') ? 1 : 0;
        $index = Menu::max('menuindex');
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $validatedData['menuindex'] = $index + 1;
        $validatedData['menustatus'] = $status;
        Menu::create($validatedData);
        return redirect()->route('menu.index')->with('success', 'menu created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.menus.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return response()->json([
            'status' => 200,
            'menu' => $menu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
