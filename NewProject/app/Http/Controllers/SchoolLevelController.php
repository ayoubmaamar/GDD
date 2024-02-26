<?php

namespace App\Http\Controllers; // Ajoutez le bon namespace ici

use App\Models\SchoolLevel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Assurez-vous d'importer la classe Controller

class SchoolLevelController extends Controller
{
    public function index()
    {
        $levels = SchoolLevel::all();
        return view('school_levels.index', compact('levels'));
    }

    public function create()
    {
        return view('school_levels.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'SCHOOL_LEVEL' => 'required|string|max:255',
        ]);

        SchoolLevel::create($validatedData);
        return redirect()->route('school_levels.index')->with('success', 'Niveau scolaire ajouté avec succès.');
    }

    public function edit(SchoolLevel $school_level) // Assurez-vous que le paramètre correspond au modèle que vous éditez
    {
        return view('school_levels.edit', compact('school_level')); // 'school_level' et non 'service'
    }

    public function update(Request $request, SchoolLevel $school_level)
    {
        $validatedData = $request->validate([
            'SCHOOL_LEVEL' => 'required|string|max:255',
        ]);

        $school_level->update($validatedData);
        return redirect()->route('school_levels.index')->with('success', 'Niveau scolaire mis à jour avec succès.');
    }

    public function destroy(SchoolLevel $school_level)
    {
        $school_level->delete();
        return redirect()->route('school_levels.index')->with('success', 'Niveau scolaire supprimé avec succès.');
    }
}
