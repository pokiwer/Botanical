<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tree;


class HomeController extends Controller
{
    public function index()
    {
        $trees = Tree::with('deal')->orderBy('id', 'desc')->get();
        return view('home', compact('trees'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
