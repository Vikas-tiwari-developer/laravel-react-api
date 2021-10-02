<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function getAllStudent(Request $request)
    {
        $students = Student::all();
        return response()->json([
           'status' => 200,
           'students' => $students,
        ]);
    }

    public function storeStudent(Request $request)
    {
        $new_student = new Student;
        $new_student->name = $request->input('name');
        $new_student->course = $request->input('course');
        $new_student->email = $request->input('email');
        $new_student->phone = $request->input('phone');
        $new_student->save();

        return response()->json([
            'status' => 200,
            'message' => 'Student Added SuccessFully',
        ]);
    }
	
	public function editSpecificStudent($id)
	{
		$student = Student::find($id);
		return response()->json([
		    'stutus' => 200,
			'student' => $student
		]);
	}
	
	public function updateSpecificStudent(Request $request, $id)
    {
        $new_student = Student::find($id);
        $new_student->name = $request->input('name');
        $new_student->course = $request->input('course');
        $new_student->email = $request->input('email');
        $new_student->phone = $request->input('phone');
        $new_student->update();

        return response()->json([
            'status' => 200,
            'message' => 'Student Updated SuccessFully',
        ]);
    }
	
	public function deleteSpecificStudent($id)
	{
		$student = Student::find($id);
		$student->delete();
		return response()->json([
            'status' => 200,
            'message' => 'Student Deleted SuccessFully',
        ]);
	}
}
