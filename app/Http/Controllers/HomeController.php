<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class HomeController extends Controller
{
    public function index(){
        $travels = Travel::all();
        return view("welcome",compact("travels"));
        // dd($ciao);
    }
}
