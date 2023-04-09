<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        return view('coach.coach'); // Reemplaza 'mi_pagina' con el nombre de la vista que desees mostrar
    }
}
