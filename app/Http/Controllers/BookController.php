<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = DB::table('books')
        ->leftJoin('authors', 'books.author_id', '=', 'authors.id')
        ->leftJoin('categories', 'books.category_id', '=', 'categories.id')
        ->select(
            'books.*',
            'authors.name as author_name',
            'categories.name as category_name'
        )
        ->orderByDesc('books.id')
        ->get();

    return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $categories = DB::table('categories')->get();
        $authors = DB::table('authors')->get();

        return view('books.create', compact('categories', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'title' => 'required',
        'author_id' => 'required',
        'category_id' => 'required',
        'isbn' => 'required|unique:books,isbn',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'description' => 'nullable',
        'status' => 'nullable|in:available,borrowed,reserved',
    ]);

    $coverPath = null;

        if ($request->hasFile('cover_image')) 
    {

        $file = $request->file('cover_image');

        // create unique filename
        $filename = time() . '_' . $file->getClientOriginalName();

        // move file to storage/app/public/covers
        $file->storeAs('covers', $filename, 'public');

        // save path in database
        $coverPath = 'covers/' . $filename;
    }

    DB::table('books')->insert([
        'title' => $request->title,
        'isbn' => $request->isbn,
        'author_id' => $request->author_id,
        'category_id' => $request->category_id,
        'cover_image' => $coverPath,
        'description' => $request->description,
        'status' => $request->status ?? 'available',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->route('books.index')->with('success', 'Book created successfully');
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
    public function edit($id)
    {
        $book = DB::table('books')->where('id', $id)->first();
        $categories = DB::table('categories')->get();
        $authors = DB::table('authors')->get();

        return view('books.edit', compact('book', 'categories', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author_id' => 'required',
            'category_id' => 'required',
            'isbn' => 'required|unique:books,isbn,' . $id,
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'nullable|in:available,borrowed,reserved',
        ]);

        $book = DB::table('books')->where('id', $id)->first();
        $coverPath = $book->cover_image;

        if ($request->hasFile('cover_image')) {

            if ($coverPath) {
                Storage::disk('public')->delete($coverPath);
            }

            $coverPath = $request->file('cover_image')
                ->store('covers', 'public');
        }

        DB::table('books')->where('id', $id)->update([
            'title' => $request->title,
            'isbn' => $request->isbn,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'cover_image' => $coverPath,
            'description' => $request->description,
            'status' => $request->status ?? 'available',
            'updated_at' => now(),
        ]);

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy($id)
    {
        $book = DB::table('books')->where('id', $id)->first();

        if ($book->cover_image) {
            Storage::disk('public')->delete($book->cover_image);
        }

        DB::table('books')->where('id', $id)->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
