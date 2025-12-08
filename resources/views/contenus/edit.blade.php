@extends('admin.dashboard')

@section('title', 'Modifier un contenu')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Modifier le contenu</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.contenus.update', $contenu->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1">Titre</label>
            <input type="text" name="titre" class="w-full p-2 rounded bg-gray-800 text-white"
                   value="{{ $contenu->titre }}" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Type</label>
            <select name="id_type" class="w-full p-2 rounded bg-gray-800 text-white" required>
                @foreach(\App\Models\TypeContenu::all() as $type)
                    <option value="{{ $type->id }}" @selected($contenu->id_type == $type->id)>
                        {{ $type->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Auteur</label>
            <select name="id_auteur" class="w-full p-2 rounded bg-gray-800 text-white" required>
                @foreach(\App\Models\User::all() as $user)
                    <option value="{{ $user->id }}" @selected($contenu->id_auteur == $user->id)>
                        {{ $user->nom }} {{ $user->prenom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Texte</label>
            <textarea name="texte" class="w-full p-2 rounded bg-gray-800 text-white"
                      rows="5">{{ $contenu->texte }}</textarea>
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                Mettre à jour
            </button>

            <a href="{{ route('admin.contenus.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
                Annuler
            </a>
        </div>
    </form>
</div>
@endsection
