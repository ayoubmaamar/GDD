<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SchoolLevel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schoolLevels = SchoolLevel::all();
        return view('students.create', compact('schoolLevels'));
        
    }

    /**
     * Store a newly created student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'FIRST_NAME_STUDENT' => 'required',
            'LAST_NAME_STUDENT' => 'required',
            // Ajoutez ici les règles de validation pour les autres champs.
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::with('schoolLevel')->findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $schoolLevels = SchoolLevel::all();
        // Passez ici d'autres données nécessaires pour les champs déroulants ou autres.
        return view('students.edit', compact('student', 'schoolLevels'));
    }

    /**
     * Update the specified student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'FIRST_NAME_STUDENT' => 'required',
            'LAST_NAME_STUDENT' => 'required',
            // Ajoutez ici les règles de validation pour les autres champs.
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified student from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }

    public function showDocuments($id)
    {
        $student = Student::findOrFail($id);
        $documents = $student->documents; // Utilise la relation définie dans le modèle

        return view('students.documents', compact('student', 'documents'));
    }
}
