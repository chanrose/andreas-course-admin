<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome');
    }


    public function getList()
    {
        $allCourse = DB::table('andreas')->get();
        return view('listCourses', compact('allCourse'));
    }

    public function createCourse()
    {
        return view('create');
    }
    public function getCourseById($CID)
    {
        $oneCourse = DB::table('andreas')->where('CID', $CID)->first();
        return view('viewCourse', compact('oneCourse'));
    }
    public function editCourseById($CID)
    {
        $course = DB::table('andreas')->where('CID', $CID)->first();
        return view('updateCourse', compact('course'));
    }

    public function updateCourseById(Request $request)
    {
        DB::table('andreas')->where('CID', $request->AID)->update([
            'courseCode' => $request->courseCode,
            'courseName' => $request->courseName,
            'programName' => $request->programName,
            'instructorName' => $request->instructorName,
            'courseDescription' => $request->courseDescription,
        ]);
        return back()->with('course_updated', 'You have updated the course');
    }

    public function deleteCourseById($CID)
    {
        $course = DB::table('andreas')->where('CID', $CID)->delete();
        return back()->with('course_deleted', 'Course has been deleted');
    }
    public function submitCreation(Request $request)
    {
        DB::table('andreas')->insert([
            'courseCode' => $request->courseCode,
            'courseName' => $request->courseName,
            'programName' => $request->programName,
            'instructorName' => $request->instructorName,
            'courseDescription' => $request->courseDescription,
        ]);
        return back()->with('course_added', 'You have added a course!');
    }

}
