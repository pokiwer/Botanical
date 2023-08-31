<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tree;
use App\Models\Tree_type;
use Illuminate\Http\Request;

class AdminTreeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treetypes = Tree_type::all();
        return view('admin.tree_types.index', compact('treetypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tree_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',

        ]);
        Tree_type::create($validatedData);
        return redirect()->route('tree_type.index')->with('success', 'menu created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.tree_types.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $treetype = Tree_type::find($id);
        return response()->json([
            'status' => 200,
            'treetype' => $treetype
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $treetype = Tree_type::findOrFail($id);
        $treetype->update(['name' => $request->name]);
        return redirect()
            ->route('tree_type.index')
            ->with('success', 'Cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $treetype = Tree_type::find($id);
        $treetype->delete();
        return redirect()->route('tree_type.index');
    }
}
