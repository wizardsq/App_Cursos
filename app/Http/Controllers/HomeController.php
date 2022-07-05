<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class HomeController extends Controller
{
    public function __invoke(){

       $cursos = Course::where('status', '3')->latest('id')->get()->take(10);

        return view('welcome', compact('cursos'));
    }

}
