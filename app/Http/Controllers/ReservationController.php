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
        $userReservations = Reservation::where('user_id', auth()->user()->id)->get();
        return view('user.reservations.index', ['reservations' => $userReservations]);
    }


    public function create(Request $request)
    {
        $user_id = $request->query('user_id');
        $book_id = $request->query('book_id');

        $user = User::findOrFail($user_id);
        $book = Book::findOrFail($book_id);


        return view('user.reservations.create', ['user' => $user, 'book' => $book]);
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'reservation_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:reservation_date',
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
        ]);

        $reservation = Reservation::create($validatedData);
        $book = Book::findOrFail($validatedData['book_id']);
        $book->decrement('available_copies');

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }


    public function edit(Reservation $reservation)
    {
        return view('user.reservations.edit', ['reservation' => $reservation]);


    }

    public function update(Request $request, Reservation $reservation)
{
    $validatedData = $request->validate([
        'reservation_date' => 'required|date',
        'return_date' => 'required|date|after_or_equal:reservation_date',
        'is_returned' => 'boolean',
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
