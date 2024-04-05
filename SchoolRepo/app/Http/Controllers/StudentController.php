<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }

    public function getGroup($id)
    {
        $student = Student::find($id);
        $group = $student->group;
        return response()->json($group);
    }

   

   
    

    


        
}
