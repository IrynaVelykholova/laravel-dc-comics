<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index() {
        $dati = Comic::all();
        return view('index', ['dati' => $dati]);
    }
}