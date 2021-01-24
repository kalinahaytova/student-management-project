<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Article;
Use App\Models\Student;
Use App\Models\Teacher;

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
 public function getStudents() {
        
        // We create a variable for the title
        $title = 'List of Students';
        //  We retrieve the information from the database using the model
        $students = Student::select('*')->get();
 

        //Then all the information is sent to the view using compact
        return view('index.students', compact('title','students'));

    }

    public function getTeachers() {
    
        
        // We create a variable for the title
        $title = 'List of Teachers';
        //  We retrieve the information from the database using the model
        $teachers = Teacher::select('Name', 'E-mail as Email')->get();

        // dd($teachers);

        //Then all the information is sent to the view using compact

        return view('index.teachers', compact('title','teachers'));

    }

    public function getArticles() {
    
        
        // We create a variable for the title
        $title = 'List of Articles';
        //  We retrieve the information from the database using the model
        $articles = Article::select('*')->get();

        // dd($articles);

        //Then all the information is sent to the view using compact

        return view('index.articles', compact('title','articles'));

    }
}
