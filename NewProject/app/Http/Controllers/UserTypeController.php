<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    public function index()
    {
        $userTypes = UserType::all();
        return response()->json($userTypes);
    }

    public function store(Request $request)
    {
        $userType = UserType::create($request->all());
        return response()->json($userType, 201);
    }

    public function show($id)
    {
        $userType = UserType::find($id);
        return response()->json($userType);
    }

    public function update(Request $request, $id)
    {
        $userType = UserType::find($id);
        $userType->update($request->all());
        return response()->json($userType);
    }

    public function destroy($id)
    {
        UserType::destroy($id);
        return response()->json(null, 204);
    }
}