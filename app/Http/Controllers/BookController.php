<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id)
    {
        $book = book::with('user')->findOrFail($id); // Eager load the 'user' relationship
        return response()->json($book);
    }
}
