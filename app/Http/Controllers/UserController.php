<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Langue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Liste des utilisateurs
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    // Formulaire création utilisateur
    public function create()
    {
        $langues = Langue::orderBy('nom')->get();
        return view('admin.users.create', compact('langues'));
    }

    // Enregistrement utilisateur
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom'            => 'required|string|max:255',
            'prenom'         => 'required|string|max:255',
            'email'          => 'required|email|unique:users',
            'password'       => 'required|min:6',
            'role'           => 'nullable|string',
            'sexe'           => 'nullable|in:M,F',
            'id_langue'      => 'nullable|exists:langues,id',
            'date_naissance' => 'nullable|date',
            'statut'         => 'nullable|string',
            'photo'          => 'nullable|string',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['date_inscription'] = now();

        User::create($validated);

        return redirect()->route('admin.users.index')
                         ->with('success', 'Utilisateur créé avec succès.');
    }

    // Formulaire modification utilisateur
    public function edit($id)
    {
        $user    = User::findOrFail($id);
        $langues = Langue::orderBy('nom')->get();

        return view('admin.users.edit', compact('user', 'langues'));
    }

    // Mise à jour utilisateur
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'nom'            => 'required|string|max:255',
            'prenom'         => 'required|string|max:255',
            'email'          => 'required|email|unique:users,email,'.$id,
            'password'       => 'nullable|min:6',
            'role'           => 'nullable|string',
            'sexe'           => 'nullable|in:M,F',
            'id_langue'      => 'nullable|exists:langues,id',
            'date_naissance' => 'nullable|date',
            'statut'         => 'nullable|string',
            'photo'          => 'nullable|string',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('admin.users.index')
                         ->with('success', 'Utilisateur mis à jour avec succès.');
    }

    // Suppression utilisateur
    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->route('admin.users.index')
                         ->with('success', 'Utilisateur supprimé.');
    }

    // Formulaire recherche utilisateur
    public function searchForm()
    {
        return view('admin.users.search');
    }

    // Traitement recherche utilisateur
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string',
        ]);

        $query = $request->input('query');

        $user = User::where('id', $query)
                    ->orWhere('nom', 'like', "%$query%")
                    ->orWhere('prenom', 'like', "%$query%")
                    ->orWhere('email', 'like', "%$query%")
                    ->first();

        if (!$user) {
            return redirect()->back()->withErrors(['query' => 'Aucun utilisateur trouvé.']);
        }

        return view('admin.users.show', compact('user'));
    }
}
