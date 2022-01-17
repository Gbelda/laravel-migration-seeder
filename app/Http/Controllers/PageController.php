<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Flight;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
        return view('home');
    }

    public function flights(){
            $flights = Flight::all();
            return view('flights', compact('flights'));
    }

    public function blogs(){
            $blogs = Blog::all();
            return view('flights', compact('blogs'));
    }
}
