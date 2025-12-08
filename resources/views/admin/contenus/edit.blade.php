@extends('admin.dashboard')

@section('title', 'Modifier Contenu')

@section('content')
<div class="p-6 max-w-lg mx-auto">

    <div class="bg-white rounded-2xl shadow-lg p-8 transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">

        <h1 class="text-2xl font-bold mb-6 text-center">Modifier le contenu</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.contenus.update', $contenu->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Titre</label>
                <input type="text" name="titre" value="{{ $contenu->titre }}"
                    class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:border-blue-500 transition" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Type</label>
                <select name="id_type" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:border-blue-500 transition" required>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" @if($contenu->id_type==$type->id) selected @endif>{{ $type->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Auteur</label>
                <select name="id_auteur" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:border-blue-500 transition" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if($contenu->id_auteur==$user->id) selected @endif>{{ $user->nom }} {{ $user->prenom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Texte</label>
                <textarea name="texte" rows="6"
                    class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:border-blue-500 transition">{{ $contenu->texte }}</textarea>
            </div>

            <div class="flex gap-3 justify-end flex-wrap">
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-5 py-2 rounded-lg transition">Mettre à jour</button>
                <a href="{{ route('admin.contenus.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-5 py-2 rounded-lg transition">Annuler</a>
            </div>

        </form>

    </div>

</div>
@endsection
