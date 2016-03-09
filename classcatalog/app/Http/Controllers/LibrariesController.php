<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use App\Http\Requests;

class LibrariesController extends Controller
{
    //
    public function index(){
        //$libraries is passed to the view pages.libraries
        $libraries = Library::all();
        return view('pages.libraries', compact('libraries'));
    }
}
