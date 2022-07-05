<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('login')->with('succes', 'Inscription effectuée avec succes');
    }

    
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/');
        }
        return back()->with('erreur', 'Les identifiants renseignés sont incorrecte');
    }

    public function deconnexion()
    {   
        Auth::logout();
        return redirect()->route('login');
    }
    

    public function showProfil()
    {
        $articles = Article::all();
        $user = Auth::user();
        if($user){
            return view('profil', compact('user'));
        }
        return view('home')->with('articles', $articles);
    }

    public function destroy($id) 
    {
        User::destroy($id);
        return redirect('/signup');
    }
}

