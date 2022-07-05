<?php

namespace App\Http\Controllers\instructor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Level;
use App\Models\Price;
use Illuminate\Support\Facades\Storage;

class courseController extends Controller
{
   
    public function index()
    {
        return view('instructor.courses.index');
    }

  
    public function create()
    {
        $categorias = Category::pluck('name', 'id');
        $niveles = Level::pluck('name', 'id');
        $precios = Price::pluck('name', 'id');

        return view('instructor.courses.create', compact('categorias', 'niveles', 'precios'));
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses',
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',
            'file' => 'image'
        ]);
        

        $course = Course::create($request->all());
       
        if($request->file('file')){
            $url = Storage::put('courses',$request->file('file')); 

            $course->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('instructor.courses.edit', $course);
    }

    
    public function show(Course $course)
    {
        return view('instructor.courses.show', compact('course'));
    }

    
    public function edit(Course $course)
    {
        $categorias = Category::pluck('name', 'id');
        $niveles = Level::pluck('name', 'id');
        $precios = Price::pluck('name', 'id');

        return view('instructor.courses.edit', compact('course','categorias', 'niveles', 'precios'));
    }

    
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses,slug,' . $course->id,
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',
            'file' => 'image'
        ]);

        $course->update($request->all());
        
        if($request->file('file')){
            $url = Storage::put('courses', $request->file('file')); 

            if($course->image){
                Storage::delete($course->image->url);

                $course->image->update([
                    'url' => $url
                ]);

            }else{
                $course->image()->create([
                    'url' => $url
                ]);
            }
            
        }

        return redirect()->route('instructor.courses.edit', $course);
    }

    
    public function destroy(Course $course)
    {
        //
    }

    public function goals(Course $course){
        return view('instructor.courses.goals', compact('course'));
    }

    public function status(Course $course){
        $course->status = 2;
        $course->save();
        return back();
    }
}
