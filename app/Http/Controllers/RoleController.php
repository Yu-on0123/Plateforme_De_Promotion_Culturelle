<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return response()->json(Role::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_role' => 'required|string|max:255|unique:roles',
        ]);

        $role = Role::create($validated);
        return response()->json($role, 201);
    }

    public function show($id)
    {
        $role = Role::find($id);
        if (!$role) return response()->json(['message'=>'Rôle non trouvé'], 404);
        return response()->json($role, 200);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        if (!$role) return response()->json(['message'=>'Rôle non trouvé'], 404);

        $validated = $request->validate([
            'nom_role' => 'sometimes|string|max:255|unique:roles,nom_role,'.$id,
        ]);

        $role->update($validated);
        return response()->json($role, 200);
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        if (!$role) return response()->json(['message'=>'Rôle non trouvé'], 404);

        $role->delete();
        return response()->json(['message'=>'Rôle supprimé'], 200);
    }
}
