<?php

namespace App\Http\Controllers;

use App\Models\ServicePack;
use Illuminate\Http\Request;

class ServicePackController extends Controller
{
    public function index()
    {
        $servicePacks = ServicePack::all();
        return view('service_packs.index', compact('servicePacks'));
    }

    public function create()
    {
        return view('service_packs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'SERVICE_PACK' => 'required|max:255',
            'DESCRIPTION' => 'nullable',
            'PRICE' => 'required|numeric'
        ]);

        ServicePack::create($validatedData);
        return redirect()->route('service_packs.index')->with('success', 'Pack de services créé avec succès.');
    }

    public function show($id)
    {
        $servicePack = ServicePack::findOrFail($id);
        return view('service_packs.show', compact('servicePack'));
    }

    public function edit($id)
    {
        $servicePack = ServicePack::findOrFail($id);
        return view('service_packs.edit', compact('servicePack'));
    }

    public function update(Request $request, $id)
    {
        $servicePack = ServicePack::findOrFail($id);

        $validatedData = $request->validate([
            'SERVICE_PACK' => 'required|max:255',
            'DESCRIPTION' => 'nullable',
            'PRICE' => 'required|numeric'
        ]);

        $servicePack->update($validatedData);
        return redirect()->route('service_packs.index')->with('success', 'Pack de services mis à jour avec succès.');
    }

    public function destroy($id)
    {
        ServicePack::destroy($id);
        return redirect()->route('service_packs.index')->with('success', 'Pack de services supprimé avec succès.');
    }
}
