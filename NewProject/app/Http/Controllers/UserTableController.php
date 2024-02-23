<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTableController extends Controller
{
    public function index()
    {
        $users = UserTable::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        
        $user = new UserTable;
        $user->ID_GOOGLE = $request->ID_GOOGLE;
        $user->EMAIL_USER = $request->EMAIL_USER;
        $user->PASSWORD_USER = Hash::make($request->PASSWORD_USER); // Hash du mot de passe
        $user->HASH_PASSWORD_USER = Hash::make($request->HASH_PASSWORD_USER); 
        $user->save();

        return response()->json($user, 201);
    }

    public function show($id)
    {
        $user = UserTable::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = UserTable::find($id);
        $user->update($request->all());
        return response()->json($user);
    }

    public function destroy($id)
    {
        UserTable::destroy($id);
        return response()->json(null, 204);
    }
}