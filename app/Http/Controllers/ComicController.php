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

        $data['artists'] = explode(", ", $data['artists']);
        $data['writers'] = explode(", ", $data['writers']);

        $newComic = new Comic();

        //$newComic->fill($data);
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->artists = json_encode($data['artists']);
        $newComic->writers = json_encode($data['writers']);
        $newComic->save();

        return redirect()->route('show', $newComic->id);
    }
}
