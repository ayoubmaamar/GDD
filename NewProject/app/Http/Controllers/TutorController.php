<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        return Tutor::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'FAMILIAL_LINK' => 'nullable|max:255',
            'FIRST_NAME_TUTOR' => 'required|max:255',
            'LAST_NAME_TUTOR' => 'required|max:255',
            'ADDRESS_TUTOR' => 'nullable',
            'EMAIL_TUTOR' => 'nullable|email'
        ]);

        $tutor = Tutor::create($validatedData);
        return response()->json($tutor, 201);
    }

    public function show($id)
    {
        $tutor = Tutor::findOrFail($id);
        return response()->json($tutor);
    }

    public function update(Request $request, $id)
    {
        $tutor = Tutor::findOrFail($id);

        $validatedData = $request->validate([
            'FAMILIAL_LINK' => 'nullable|max:255',
            'FIRST_NAME_TUTOR' => 'required|max:255',
            'LAST_NAME_TUTOR' => 'required|max:255',
            'ADDRESS_TUTOR' => 'nullable',
            'EMAIL_TUTOR' => 'nullable|email'
        ]);

        $tutor->update($validatedData);
        return response()->json($tutor);
    }

    public function destroy($id)
    {
        Tutor::destroy($id);
        return response()->json(null, 204);
    }
}