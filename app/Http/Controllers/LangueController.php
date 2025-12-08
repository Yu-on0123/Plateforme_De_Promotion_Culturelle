<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use Illuminate\Http\Request;

class LangueController extends Controller
{
    public function index()
    {
        $langues = Langue::all();
        return view('admin.langues.index', compact('langues'));
    }

    public function create()
    {
        return view('admin.langues.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:langues,nom',
            'code' => 'required|string|max:10|unique:langues,code_langue',
            'description' => 'nullable|string|max:500',
        ]);

        $langue = Langue::create([
            'nom' => $validated['nom'],
            'code_langue' => $validated['code'],
            'description' => $validated['description'] ?? '',
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Langue ajoutée avec succès.',
                'langue' => $langue,
            ]);
        }

        return redirect()->route('admin.langues.index')
            ->with('success', 'Langue ajoutée avec succès.');
    }

    public function edit(Langue $langue)
    {
        return view('admin.langues.edit', compact('langue'));
    }

    public function update(Request $request, Langue $langue)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:langues,nom,' . $langue->id,
            'code' => 'required|string|max:10|unique:langues,code_langue,' . $langue->id,
            'description' => 'nullable|string|max:500',
        ]);

        $langue->update([
            'nom' => $validated['nom'],
            'code_langue' => $validated['code'],
            'description' => $validated['description'] ?? '',
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Langue mise à jour avec succès.',
                'langue' => $langue,
            ]);
        }

        return redirect()->route('admin.langues.index')
            ->with('success', 'Langue mise à jour avec succès.');
    }

    public function destroy(Request $request, Langue $langue)
    {
        $langue->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Langue supprimée avec succès.',
            ]);
        }

        return redirect()->route('admin.langues.index')
            ->with('success', 'Langue supprimée avec succès.');
    }

    public function show(Langue $langue)
    {
        return view('admin.langues.show', compact('langue'));
    }
}
