@extends('admin.dashboard')

@section('title', 'Rechercher un utilisateur')

@section('content')

<div class="max-w-3xl mx-auto">

    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
        Rechercher un utilisateur
    </h1>

    <!-- Formulaire de recherche -->
    <form action="{{ route('admin.users.search') }}" method="POST"
          class="bg-white p-6 rounded-xl shadow-md mb-6 space-y-4">
        @csrf

        <label for="query" class="text-gray-700 font-medium">
            Nom, prénom ou email :
        </label>

        <input type="text" name="query" id="query"
               placeholder="Ex: John Doe ou john@example.com"
               class="w-full border border-gray-300 rounded-lg p-3 
                      focus:outline-none focus:ring-2 focus:ring-blue-500">

        <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg shadow 
                       hover:bg-blue-700 hover:scale-105 transition">
            🔍 Rechercher
        </button>

        @if ($errors->any())
            <ul class="text-red-500 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>

    <!-- Résultat utilisateur -->
    @isset($user)
    <div class="bg-white rounded-xl shadow-md p-6 transition hover:shadow-xl">

        <div class="flex items-center space-x-4">
            <img src="{{ $user->photo ?? 'https://via.placeholder.com/80' }}"
                 alt="Photo utilisateur"
                 class="w-20 h-20 rounded-full object-cover border-2 border-blue-500">
            
            <div>
                <h2 class="text-xl font-semibold text-gray-800">
                    {{ $user->nom }} {{ $user->prenom }}
                </h2>
                <p class="text-gray-500">{{ $user->email }}</p>
            </div>
        </div>

        <div class="mt-4 space-y-2">
            <p>
                <span class="font-medium text-gray-700">Rôle :</span>
                <span class="px-2 py-1 bg-green-500 text-white rounded-full text-sm">
                    {{ $user->role ?? 'N/A' }}
                </span>
            </p>
            <p><span class="font-medium text-gray-700">Sexe :</span> {{ $user->sexe ?? '-' }}</p>
            <p><span class="font-medium text-gray-700">Langue :</span> {{ $user->langue->nom ?? '-' }}</p>
            <p><span class="font-medium text-gray-700">Date de naissance :</span> {{ $user->date_naissance ?? '-' }}</p>
            <p><span class="font-medium text-gray-700">Statut :</span> {{ $user->statut ?? '-' }}</p>
        </div>

        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('admin.users.edit', $user->id) }}"
               class="bg-yellow-500 text-white px-3 py-2 rounded-lg text-sm shadow 
                      hover:bg-yellow-600 hover:scale-105 transition">
                ✏️ Modifier
            </a>

            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                        onclick="return confirm('Supprimer cet utilisateur ?')"
                        class="bg-red-600 text-white px-3 py-2 rounded-lg text-sm shadow 
                               hover:bg-red-700 hover:scale-105 transition">
                    🗑️ Supprimer
                </button>
            </form>
        </div>
    </div>
    @endisset

</div>

@endsection
