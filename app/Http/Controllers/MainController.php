<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souvenir;

class MainController extends Controller
{
    public function index(){
        $data = Souvenir::all();
        // dd($data);
        return view('index', compact('data'));
    }
}
