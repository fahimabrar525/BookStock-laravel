<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
   $categories = DB::table('categories')
    ->leftJoin('books', 'categories.id', '=', 'books.category_id')
    ->select(
        'categories.id',
        'categories.name',
        'categories.description',
        'categories.status',
        'categories.created_at',
        'categories.updated_at',
        DB::raw('COUNT(books.id) as books_count')
    )
    ->groupBy(
        'categories.id',
        'categories.name',
        'categories.description',
        'categories.status',
        'categories.created_at',
        'categories.updated_at'
    )
    ->get();

    return view('categories.index', compact('categories'));
}

public function create()
{
    return view('categories.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required'
    ]);

    DB::table('categories')->insert([
        'name' => $request->name,
        'description' => $request->description,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->route('categories.index')->with('success', 'Category created successfully');
}

public function edit($id)
{
    $category = DB::table('categories')->where('id', $id)->first();
    return view('categories.edit', compact('category'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'description' => 'nullable',
    ]);

    DB::table('categories')->where('id', $id)->update([
        'name' => $request->name,
        'description' => $request->description,
        'updated_at' => now(),
    ]);

    return redirect()->route('categories.index')->with('success', 'Category updated successfully');
}

public function destroy($id)
{
    DB::table('categories')->where('id', $id)->delete();
    return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
}
}
