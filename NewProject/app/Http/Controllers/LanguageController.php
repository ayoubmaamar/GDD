<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return response()->json($languages);
    }

    public function store(Request $request)
    {
        $language = Language::create($request->all());
        return response()->json($language, 201);
    }

    public function show($id)
    {
        $language = Language::find($id);
        if (!$language) {
            return response()->json(['message' => 'Language not found'], 404);
        }
        return response()->json($language);
    }

    public function update(Request $request, $id)
    {
        $language = Language::find($id);
        if (!$language) {
            return response()->json(['message' => 'Language not found'], 404);
        }
        $language->update($request->all());
        return response()->json($language);
    }

    public function destroy($id)
    {
        $language = Language::find($id);
        if (!$language) {
            return response()->json(['message' => 'Language not found'], 404);
        }
        $language->delete();
        return response()->json(['message' => 'Language deleted']);
    }
}