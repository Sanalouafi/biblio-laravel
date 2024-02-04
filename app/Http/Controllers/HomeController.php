<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestBooks = Book::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', ['latestBooks' => $latestBooks]);
    }
    public function show(){
        $books=Book::all();
        return view('book', ['books'=> $books]);
    }

}

