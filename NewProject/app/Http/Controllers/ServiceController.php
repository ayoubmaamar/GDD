<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return Service::all();
    }

    public function store(Request $request) {
        return Service::create($request->all());
    }

    public function show($id) {
        return Service::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $service = Service::findOrFail($id);
        $service->update($request->all());
        return $service;
    }

    public function destroy($id) {
        $service = Service::findOrFail($id);
        $service->delete();
        return response()->json(null, 204);
    }
}