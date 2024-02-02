<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PageController extends Controller
{
    //

    public function index()
    {
        return view('admin.movie.index');
    }
}
