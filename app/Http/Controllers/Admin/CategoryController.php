<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::get();
        return view('admin.categories', compact('categories'));
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'category_name' => 'required|string',
        ]);
     Category::create($data);
        
     return redirect()->route('category.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = Category::findOrFail($id);
        
        return view('admin.edit_category', compact ('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


    $data = $request->validate([
        'category_name' => 'required|string',
    ]);

    Category::where('id', $id)->update($data);
       return redirect()->route('category.index');
}
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        //
        
        $id = $request->id;
        Category::where('id', $id)->delete();
        return redirect()->route('category.index');
    }
}
