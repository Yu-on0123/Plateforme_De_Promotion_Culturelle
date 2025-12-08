<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('admin.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('admin.regions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:regions,nom',
            'description' => 'required|string',
            'population' => 'required|integer|min:0',
            'superficie' => 'required|numeric|min:0',
            'localisation' => 'required|string|max:255',
        ]);

        Region::create($validated);

        return redirect()->route('admin.regions.index')
            ->with('success', 'Région ajoutée avec succès.');
    }

    public function edit(Region $region)
    {
        return view('admin.regions.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:regions,nom,' . $region->id,
            'description' => 'required|string',
            'population' => 'required|integer|min:0',
            'superficie' => 'required|numeric|min:0',
            'localisation' => 'required|string|max:255',
        ]);

        $region->update($validated);

        return redirect()->route('admin.regions.index')
            ->with('success', 'Région mise à jour avec succès.');
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('admin.regions.index')
            ->with('success', 'Région supprimée avec succès.');
    }

    public function show(Region $region)
    {
        return view('admin.regions.show', compact('region'));
    }
}
