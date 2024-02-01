<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', ['reservations' => $reservations]);
    }

    public function create()
    {
        $users = User::all();
        $books = Book::all();
        return view('reservations.create', ['users' => $users, 'books' => $books]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'reservation_date' => 'required|date',
            'return_date' => 'required|date',
            'is_returned' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
        ]);

        $reservation = Reservation::create($validatedData);

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }

    public function edit(Reservation $reservation)
    {
        $users = User::all();
        $books = Book::all();
        return view('reservations.edit', ['reservation' => $reservation, 'users' => $users, 'books' => $books]);
    }

    public function update(Request $request, Reservation $reservation)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'reservation_date' => 'required|date',
            'return_date' => 'required|date',
            'is_returned' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
        ]);

        $reservation->update($validatedData);

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
    }
}
