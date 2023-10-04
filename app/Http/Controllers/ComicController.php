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
        $comic = Comic::findOrFail($id);
        return view('show', ['comic' => $comic]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        //////con il validate
        $data = $request->validate([
            "title"=>["required","string","max:200"],
            "description"=>["required","string","max:255"],
            "thumb"=>["nullable","string"],
            "price"=>["required","decimal:4,2"],
            "series"=>["required","string","max:100"],
            "sale_date"=>["nullable","date"],
            "type"=>["nullable","string"],
            "artists"=>["nullable","string"],
            "writers"=>["nullable","string"],
        ]);
        
        $newComic = new Comic();
        
        $data["artists"] = explode(", ", $data["artists"]);
        $data["writers"] = explode(", ", $data["writers"]);
        
        $newComic->fill($data); //nel MODEL vanno messi i dati da passare
        dd($newComic);
        $newComic->save();

        return redirect()->route('show', $newComic->id);
        ////////////////////////////////////////////////////////////////////////////////////////////////
        //senza il validate
        // $data = $request->all();

        // $data['artists'] = explode(", ", $data['artists']);
        // $data['writers'] = explode(", ", $data['writers']);
        

        // $newComic = new Comic();

        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        // $newComic->artists = $data['artists'];
        // $newComic->writers = $data['writers'];
        // $newComic->save();

        // return redirect()->route('show', $newComic->id);
    }


    public function edit($id) {
        $comic = Comic::findOrFail($id);
        return view('edit', ['comic' => $comic]);
    }

    public function update(Request $request, $id) {//va passato l'id come secondo argomento
        $comic = Comic::findOrFail($id);
        $data=$request->all();

        //non c'è il newComic perchè non deve aggiungere ma modificare
        $data["artists"]=explode(",", $data["artists"]);
        $data["writers"]=explode(",", $data["writers"]);

        $comic -> update($data);// fill + save

        return redirect()->route('show',$comic->id); //mando il mio utende alla pagina dello show del comic
    }

}
