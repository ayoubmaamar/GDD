<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // Affiche la liste des langues
    public function index()
    {
        $languages = Language::all(); // Récupère toutes les langues
        return view('languages.index', compact('languages')); // Ajusté pour le nouveau chemin de la vue
    }

    // Affiche le formulaire de création d'une nouvelle langue
    public function create()
    {
        // Just return the view for creating a new language, no need to pass $language
        return view('languages.create');
    }

    // Stocke une nouvelle langue dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'LANGUAGE' => 'required|string|max:255',
        ]);

        Language::create($request->all());

        return redirect()->route('languages.index')
                         ->with('success', 'Langue ajoutée avec succès.');
    }

    public function update(Request $request, $language)
{
    $request->validate([
        'LANGUAGE' => 'required|string|max:255',
    ]);

    $lang = Language::findOrFail($language);
    $lang->update($request->all());

    return redirect()->route('languages.index')->with('success', 'Langue mise à jour avec succès.');
}

    // Affiche le formulaire d'édition pour une langue spécifique
    public function edit($language)
    {
        $language = Language::findOrFail($language);
        return view('languages.edit', compact('language'));
    }

    // Supprime une langue spécifique de la base de données
    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();

        return redirect()->route('languages.index')
                         ->with('success', 'Langue supprimée avec succès.');
    }
}
