<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class PagosController extends Controller
{
   public function checkout(Course $course){
       return view('pagos.checkout', compact('course'));
   }
}
