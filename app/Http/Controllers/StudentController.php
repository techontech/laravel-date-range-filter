<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students');
    }

    public function records(Request $request)
    {
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $students = Student::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $students = Student::latest()->get();
                }
            } else {
                $students = Student::latest()->get();
            }

            return response()->json([
                'students' => $students
            ]);
        } else {
            abort(403);
        }
    }
}
