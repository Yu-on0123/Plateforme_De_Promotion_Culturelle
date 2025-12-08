@extends('admin.dashboard')

@section('title', 'Ajouter un commentaire')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <div class="bg-white rounded-2xl shadow-lg w-full p-8 transform transition hover:scale-105 hover:shadow-2xl">

        <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">Ajouter un commentaire</h1>

        <!-- Affichage des erreurs -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-3 rounded mb-4 shadow-inner">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.commentaires.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-medium text-gray-700">Texte</label>
                <textarea name="texte" rows="4"
                          class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500"
                          required>{{ old('texte') }}</textarea>
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Note (0 à 5)</label>
                <input type="number" name="note" min="0" max="5" value="{{ old('note') }}"
                       class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Utilisateur</label>
                <select name="id_utilisateur"
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500"
                        required>
                    <option value="">-- Choisir un utilisateur --</option>
                    @foreach($users as $u)
                        <option value="{{ $u->id }}" @if(old('id_utilisateur') == $u->id) selected @endif>
                            {{ $u->nom }} {{ $u->prenom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Contenu associé</label>
                <select name="id_contenu"
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500"
                        required>
                    <option value="">-- Choisir un contenu --</option>
                    @foreach($contenus as $c)
                        <option value="{{ $c->id }}" @if(old('id_contenu') == $c->id) selected @endif>
                            {{ $c->titre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex gap-3 justify-end mt-4 flex-wrap">
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow-md transition flex items-center justify-center">
                    Ajouter
                </button>

                <a href="{{ route('admin.commentaires.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md transition flex items-center justify-center">
                    Retour
                </a>
            </div>

        </form>

    </div>

</div>
@endsection
