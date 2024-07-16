<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::with('book')->findOrFail($id); // Eager load the 'book' relationship
        return response()->json($user);
    }
    public function showRelationships()
    {
        // Fetch a user with posts and their associated tags
        $user = User::with('posts.tags')->first();

        return response()->json([
            'user' => $user,
        ]);
    }
}
