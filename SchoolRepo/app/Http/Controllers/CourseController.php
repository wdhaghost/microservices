<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getStudents($id){
        $course = Course::find($id);
        $groups = $course->groups;
        
        foreach($groups as $group){
            $students []= $group->students;
        }

        return response()->json($students);

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);
        return response()->json($course);
    }

    
}
