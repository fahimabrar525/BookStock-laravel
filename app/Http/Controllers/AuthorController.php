<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Display all authors with books count
     */
    public function index()
    {
        $authors = DB::table('authors')
            ->leftJoin('books', 'authors.id', '=', 'books.author_id')
            ->select(
                'authors.id',
                'authors.name',
                'authors.email',
                'authors.status',
                'authors.created_at',
                'authors.updated_at',
                DB::raw('COUNT(books.id) as books_count')
            )
            ->groupBy(
                'authors.id',
                'authors.name',
                'authors.email',
                'authors.status',
                'authors.created_at',
                'authors.updated_at'
            )
            ->orderByDesc('authors.id')
            ->get();

        return view('authors.index', compact('authors'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store new author
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|unique:authors,email',
            'status' => 'required|in:active,inactive',
        ]);

        DB::table('authors')->insert([
            'name'       => $request->name,
            'email'      => $request->email,
            'status'     => $request->status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('authors.index')
            ->with('success', 'Author created successfully.');
    }

    /**
     * Edit author
     */
    public function edit($id)
    {
        $author = DB::table('authors')->where('id', $id)->first();

        return view('authors.edit', compact('author'));
    }

    /**
     * Update author
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|unique:authors,email,' . $id,
            'status' => 'required|in:active,inactive',
        ]);

        DB::table('authors')
            ->where('id', $id)
            ->update([
                'name'       => $request->name,
                'email'      => $request->email,
                'status'     => $request->status,
                'updated_at' => now(),
            ]);

        return redirect()->route('authors.index')
            ->with('success', 'Author updated successfully.');
    }

    /**
     * Delete author
     */
    public function destroy($id)
    {
        DB::table('authors')->where('id', $id)->delete();

        return redirect()->route('authors.index')
            ->with('success', 'Author deleted successfully.');
    }
}