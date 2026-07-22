<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = "Fabio";
        $habits = ['Ler', 'Correr', 'Estudar', 'Viajar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits,
        ]);
    }
}
