<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userIndex()
    {
        $shortenedUrls = Auth::user()->shortUrls()->get();
        return view('user.userpage', compact('shortenedUrls'));
    }
}
