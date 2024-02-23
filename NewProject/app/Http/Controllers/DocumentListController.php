<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentListController extends Controller
{
    public function index()
    {
        return DocumentList::with('student')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'TITLE_DOCUMENT' => 'required|max:255',
            'PATH_FILE' => 'required',
            'ID_STUDENT' => 'required|exists:STUDENT,ID_STUDENT'
        ]);

        $document = DocumentList::create($validated);
        return response()->json($document, 201);
    }

    public function show($id)
    {
        $document = DocumentList::with('student')->findOrFail($id);
        return response()->json($document);
    }

    public function update(Request $request, $id)
    {
        $document = DocumentList::findOrFail($id);

        $validated = $request->validate([
            'TITLE_DOCUMENT' => 'required|max:255',
            'PATH_FILE' => 'required',
            'ID_STUDENT' => 'required|exists:STUDENT,ID_STUDENT'
        ]);

        $document->update($validated);
        return response()->json($document);
    }

    public function destroy($id)
    {
        DocumentList::destroy($id);
        return response()->json(null, 204);
    }
}