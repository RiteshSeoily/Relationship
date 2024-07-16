<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id)
    {
        $book = book::with('user')->findOrFail($id); // Eager load the 'user' relationship
        return response()->json($book);
    }
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        // Assuming $book->user_id is the foreign key linking to User model
        $user = User::findOrFail($book->user_id);
        return view('edit', compact('book', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'book_name' => 'required|string|max:255',
        ]);

        $book = Book::findOrFail($id);
        $book->book_name = $request->book_name;
        $book->save();

        $user = User::findOrFail($book->user_id);
        $user->name = $request->name;
        $user->save();

        return redirect()->route('books.edit', $book->id)->with('success', 'Book details updated successfully.');
    }
}
