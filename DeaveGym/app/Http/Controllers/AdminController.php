<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin'); // Reemplaza 'mi_pagina' con el nombre de la vista que desees mostrar
    }
}