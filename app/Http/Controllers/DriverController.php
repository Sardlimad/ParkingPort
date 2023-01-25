<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){

        $drivers = Driver::all();

        return view('pages/drivers/view', compact('drivers'));
    }

    public function create(){
        return view('pages/drivers/create');
    }
}
