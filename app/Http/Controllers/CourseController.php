<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    public function all(){
        $courses = DB::table('courses')->get();
        return view('course.all',compact('courses'));
    }
    public function create(){
        return view('course.create');

    }
    public function store(Request $req){
          $course_code = $req->course_code;
          $course_name = $req->course_name;
          $course_type = $req->course_type;
          
          DB::table('courses')->insert([
            'course_name' => $course_name,
            'course_code' => $course_code,
            'course_type' => $course_type
            
        ]);
    }
}
