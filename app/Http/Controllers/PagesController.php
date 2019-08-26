<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages/welcome');
    }

    public function categories() {
        return view('pages/categories');
    }

    public function aboutus() {
        return view("pages/aboutus");
    }
}
