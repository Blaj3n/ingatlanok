<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategoriak;
use Illuminate\Http\Request;

class KategoriakController extends Controller
{
    public function index()
    {
        $kategoriaks = Kategoriak::all();
        return $kategoriaks;
    }
    public function show($id)
    {
        $kategoriaks = Kategoriak::find($id);
        return $kategoriaks;
    }
    public function destroy($id)
    {
        Kategoriak::find($id)->delete();
    }
    public function store(Request $request)
    {
        $Kategoriak = new Kategoriak();
        $Kategoriak->id = $request->id;
        $Kategoriak->nev = $request->nev;
    }
    public function update(Request $request, $id)
    {
        $Kategoriak = Kategoriak::find($id);
        $Kategoriak->id = $request->id;
        $Kategoriak->nev = $request->nev;
    }
}
