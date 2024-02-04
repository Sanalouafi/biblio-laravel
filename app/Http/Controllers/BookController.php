<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'publication_year' => 'required',
            'total_copies' => 'required',
            'available_copies' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $imagePath = $image->storeAs('public/images/books', $imageName);

            $validatedData['image'] = str_replace('public/', '', $imagePath);
        }
        $book = Book::create($validatedData);
        return redirect()->route('books.index')->with('success', 'book created successfully.');
    }
    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'publication_year' => 'required',
            'total_copies' => 'required',
            'available_copies' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $imagePath = $image->storeAs('public/images/books', $imageName);

            $validatedData['image'] = str_replace('public/', '', $imagePath);

            if (Storage::exists($book->image)) {
                Storage::delete($book->image);
            }
        }
        $book->update($validatedData);

        return redirect()->route('books.index')->with('success', 'book updated successfully.');
    }
    public function destroy(Book $book)
    {

        $book->delete();

        return redirect()->route('books.index')->with('success', 'book deleted successfully.');
    }
    

}
