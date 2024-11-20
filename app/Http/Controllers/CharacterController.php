<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Character;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller 
{
    public function index()
    {
        $user = Auth::user();
        $characters = $user->characters();

        return view('display-characters', ['characters' => $characters]);
    }
}