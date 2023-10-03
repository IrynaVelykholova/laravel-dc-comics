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

    public function show($id) {
        $comic = Comic::find($id);
        return view('show', ['comic' => $comic]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $data = $request->all();

        dd($data);
        $newComic = new Comic();


        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('show', $newComic->id);
    }
}
