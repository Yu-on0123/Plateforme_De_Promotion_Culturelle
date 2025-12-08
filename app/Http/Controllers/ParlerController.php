<?php

namespace App\Http\Controllers;

use App\Models\Parler;
use Illuminate\Http\Request;

class ParlerController extends Controller
{
    public function index()
    {
        return response()->json(Parler::with(['region', 'langue'])->get(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_region' => 'required|exists:regions,id',
            'id_langue' => 'required|exists:langues,id',
        ]);

        $parler = Parler::create($validated);
        return response()->json($parler, 201);
    }

    public function show($id)
    {
        $parler = Parler::with(['region', 'langue'])->find($id);
        if (!$parler) return response()->json(['message' => 'Enregistrement non trouvé'], 404);
        return response()->json($parler, 200);
    }

    public function update(Request $request, $id)
    {
        $parler = Parler::find($id);
        if (!$parler) return response()->json(['message' => 'Enregistrement non trouvé'], 404);

        $validated = $request->validate([
            'id_region' => 'sometimes|exists:regions,id',
            'id_langue' => 'sometimes|exists:langues,id',
        ]);

        $parler->update($validated);
        return response()->json($parler, 200);
    }

    public function destroy($id)
    {
        $parler = Parler::find($id);
        if (!$parler) return response()->json(['message' => 'Enregistrement non trouvé'], 404);

        $parler->delete();
        return response()->json(['message' => 'Enregistrement supprimé'], 200);
    }
}

