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
        // goes to index page
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create page
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store data
        // return $request;
        $request->validate([
            "name" => "required|max:255",
            "price" => "required|numeric|min:100",
            "description" => "required",
            "image" => "required|max:1024|mimes:jpg,png,jpeg",
        ]);
        $course = new Course();
        $course->name = $request->name;
        $course->price = $request->price;
        $course->description = $request->description;
        $file = $request->image;
        if ($file) {
            $file_name = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("images", $file_name);
            $course->image = "images/" . $file_name;
        }
        $course->save();
        toast("Course added successfully", "success");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update data
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete
    }


    public function admissions($id)
    {
        $course = Course::find($id);
        return view("course.admission", compact('course'));
    }
}
