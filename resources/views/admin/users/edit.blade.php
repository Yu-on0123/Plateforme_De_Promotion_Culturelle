@extends('admin.dashboard')

@section('title', 'Modifier utilisateur')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-8 transform transition hover:scale-105 hover:shadow-2xl">

    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Modifier utilisateur</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="flex flex-col space-y-4">
        @csrf
        @method('PUT')

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Nom</label>
            <input type="text" name="nom" value="{{ old('nom', $user->nom) }}"
                   class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Prénom</label>
            <input type="text" name="prenom" value="{{ old('prenom', $user->prenom) }}"
                   class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                   class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Mot de passe (laisser vide si inchangé)</label>
            <input type="password" name="password"
                   class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Rôle</label>
            <input type="text" name="role" value="{{ old('role', $user->role) }}"
                   class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Sexe</label>
            <select name="sexe" class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="M" {{ $user->sexe=='M' ? 'selected' : '' }}>M</option>
                <option value="F" {{ $user->sexe=='F' ? 'selected' : '' }}>F</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Langue</label>
            <select name="id_langue" class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">-- Sélectionner --</option>
                @foreach($langues as $l)
                    <option value="{{ $l->id }}" {{ $user->id_langue==$l->id ? 'selected' : '' }}>{{ $l->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Date de naissance</label>
            <input type="date" name="date_naissance" value="{{ old('date_naissance', $user->date_naissance) }}"
                   class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Statut</label>
            <input type="text" name="statut" value="{{ old('statut', $user->statut) }}"
                   class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex flex-col">
            <label class="font-medium text-gray-700">Photo (URL)</label>
            <input type="text" name="photo" value="{{ old('photo', $user->photo) }}"
                   class="border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <button type="submit"
                class="bg-blue-600 text-white py-3 rounded-lg shadow hover:bg-blue-700 transition transform hover:scale-105">
            Mettre à jour
        </button>

        @if ($errors->any())
            <ul class="text-red-500 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
</div>
@endsection
