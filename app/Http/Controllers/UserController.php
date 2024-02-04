<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('user.dashboard', ['books' => $books]);
    }
}
