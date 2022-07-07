<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        //Query al DB per prendere tutti gli Utenti registrati e restiturli in ordine crescente
        $users = User::orderBy('created_at', 'asc')->take(10)->get();
        return view('welcome', compact('users'));
    }

    //rotta per la registrazione e login di un utente
    public function login() {
        return view('auth/login');
    }
    public function register() {
        return view('auth/register');
    }
}
