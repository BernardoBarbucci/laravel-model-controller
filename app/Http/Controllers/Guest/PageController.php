<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PageController extends Controller
{
    //

    public function index()
    {
        $movies = Movie::all();

        // dd($movies);
        // check per vedere se movies viene mostrato

        return view('admin.movie.index', compact('movies'));
        // crea array associativo ['movies => $movies']
    }
}
