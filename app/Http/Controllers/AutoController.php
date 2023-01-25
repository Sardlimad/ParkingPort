<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index(){

        $autos = Auto::orderBy('id', 'desc')->get();

        return view('pages/autos/view', compact('autos'));
    }

    public function create(){
        return view('pages/autos/create');
    }

    public function store(Request $request){
        $auto = new Auto();

        $auto->plate = $request->plate;
        $auto->brand = $request->brand;
        $auto->model = $request->model;
        $auto->color = $request->color;

        $auto->save();

        return redirect()->route('autos.index');
    }
}
