<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    public function show($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        return response()->json($student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        $student->update($request->all());
        return response()->json($student);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        $student->delete();
        return response()->json(['message' => 'Student deleted']);
    }


    public function addLanguage(Request $request, $studentId)
    {
        $student = Student::findOrFail($studentId);
        $languageId = $request->input('language_id');
        $student->languages()->attach($languageId);

        return response()->json(['message' => 'Language added to student successfully']);
    }

    public function removeLanguage($studentId, $languageId)
    {
        $student = Student::findOrFail($studentId);
        $student->languages()->detach($languageId);

        return response()->json(['message' => 'Language removed from student successfully']);
    }


}