<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentIdentityController extends Controller
{
    public function index()
    {
        return StudentIdentity::with('student')->get();
    }

    public function store(Request $request)
    {
        $studentIdentity = StudentIdentity::create($request->all());
        return response()->json($studentIdentity, 201);
    }

    public function show($id)
    {
        $studentIdentity = StudentIdentity::with('student')->findOrFail($id);
        return response()->json($studentIdentity);
    }

    public function update(Request $request, $id)
    {
        $studentIdentity = StudentIdentity::findOrFail($id);
        $studentIdentity->update($request->all());
        return response()->json($studentIdentity);
    }

    public function destroy($id)
    {
        StudentIdentity::destroy($id);
        return response()->json(null, 204);
    }
}