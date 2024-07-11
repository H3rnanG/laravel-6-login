<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();

        return view('profile', compact('user','posts'));
    }
}
