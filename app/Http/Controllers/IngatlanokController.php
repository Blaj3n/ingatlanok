<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingatlanok;
use Illuminate\Http\Request;

class IngatlanokController extends Controller
{
    public function index()
    {
        $ingatlanoks = Ingatlanok::all();
        return $ingatlanoks;
    }
    public function show($id)
    {
        $ingatlanoks = Ingatlanok::find($id);
        return $ingatlanoks;
    }
    public function destory($id){
        Ingatlanok::find($id)->delete();
    }
    public function store(Request $request){
        $Ingatlanok = new Ingatlanok();
        $Ingatlanok->id = $request->id;
        $Ingatlanok->kategoria = $request->kategoria;
        $Ingatlanok->leiras = $request->leiras;
        $Ingatlanok->hirdetesDatuma = $request->hirdetesDatuma;
        $Ingatlanok->tehermentes = $request->tehermentes;
        $Ingatlanok->ar = $request->ar;
        $Ingatlanok->kepUrl = $request->kepUrl;
        $Ingatlanok->save();
    }
    public function update(Request $request, $id){
        $Ingatlanok = Ingatlanok::find($id);
        $Ingatlanok->id = $request->id;
        $Ingatlanok->kategoria = $request->kategoria;
        $Ingatlanok->leiras = $request->leiras;
        $Ingatlanok->hirdetesDatuma = $request->hirdetesDatuma;
        $Ingatlanok->tehermentes = $request->tehermentes;
        $Ingatlanok->ar = $request->ar;
        $Ingatlanok->kepUrl = $request->kepUrl;
        $Ingatlanok->save();
    }
}