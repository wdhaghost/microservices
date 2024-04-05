<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return response()->json($groups);
    }

    public function getStudents($id)
    {
        $group = Group::find($id);
        $students = $group->students;
        return response()->json($students);
    
    }

    public function getCourses($id)
    {
        $group = Group::find($id);
        $courses = $group->courses;
        return response()->json($courses);
    }

    public function show(string $id)
    {
        $group = Group::find($id);
        return response()->json($group->Id);
    }

}
