<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;


class SeriesController extends Controller
{
    public function index(Request $request)
    {
        // $series = DB::select('SELECT nome FROM series;');
        // $series = Serie::all();
        // $series = Serie::query()->orderBy('nome', 'desc')->get();
        $series = Serie::query()->orderBy('nome')->get();
        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');

        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');

        // if(DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])) {
        //     return redirect('/series');
        // } else {
        //     return "Deu erro";
        // }
    }
}
