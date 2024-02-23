<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolLevelController extends Controller
{
    public function index()
    {
        $schoolLevels = SchoolLevel::all();
        return response()->json($schoolLevels);
    }

    public function store(Request $request)
    {
        $schoolLevel = SchoolLevel::create($request->all());
        return response()->json($schoolLevel, 201);
    }

    public function show($id)
    {
        $schoolLevel = SchoolLevel::findOrFail($id);
        return response()->json($schoolLevel);
    }

    public function update(Request $request, $id)
    {
        $schoolLevel = SchoolLevel::findOrFail($id);
        $schoolLevel->update($request->all());
        return response()->json($schoolLevel);
    }

    public function destroy($id)
    {
        SchoolLevel::destroy($id);
        return response()->json(null, 204);
    }
}