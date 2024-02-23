<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePackController extends Controller
{
    public function index()
    {
        return ServicePack::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'SERVICE_PACK' => 'required|max:255',
            'DESCRIPTION' => 'nullable',
            'PRICE' => 'required|numeric'
        ]);

        $servicePack = ServicePack::create($validatedData);
        return response()->json($servicePack, 201);
    }

    public function show($id)
    {
        $servicePack = ServicePack::findOrFail($id);
        return response()->json($servicePack);
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
        return response()->json($servicePack);
    }

    public function destroy($id)
    {
        ServicePack::destroy($id);
        return response()->json(null, 204);
    }
}