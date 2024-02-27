<?php

namespace App\Http\Controllers;

use App\Models\Document; 
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create($id)
    {
        return view('documents.create', ['studentId' => $id]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'TITLE_DOCUMENT' => 'required',
            'PATH_FILE' => 'required|file',
            'ID_STUDENT' => 'required|exists:STUDENT,ID_STUDENT', // Correction ici: la table doit correspondre à votre nom de table exact dans la base de données
        ]);

        $path = $request->file('PATH_FILE')->store('public/documents');

        Document::create([ // Utilisez ici Document au lieu de DocumentController
            'TITLE_DOCUMENT' => $request->TITLE_DOCUMENT,
            'PATH_FILE' => $path,
            'ID_STUDENT' => $request->ID_STUDENT,
        ]);

        // Rediriger vers une route appropriée après l'ajout
        return redirect()->route('students.documents', $request->ID_STUDENT);
    }
}
