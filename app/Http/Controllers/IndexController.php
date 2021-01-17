<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
    //Get data from DB in here and pass it to the view

    return view('index.index', [
        'title' => 'Welcome!',
        'text' => '
        <hr />
        <h3><p>This is a student management system for students and their teachers and articles based on Laravel 8.x. </p></h3>'
    ]);
}
}
