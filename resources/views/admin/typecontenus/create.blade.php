@extends('admin.dashboard')

@section('title', 'Ajouter Type de Contenu')

@section('content')
<div class="max-w-lg mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <div class="bg-white rounded-2xl shadow-lg p-8 transform transition hover:scale-105 hover:shadow-2xl">

        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Ajouter un type de contenu</h1>

        <form action="{{ route('admin.types_contenus.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="font-medium text-gray-700">Nom du type :</label>
                <input type="text" name="nom" value="{{ old('nom') }}" required
                       class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 
                              focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('nom')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-4 pt-3">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow-md transition">
                    Enregistrer
                </button>

                <a href="{{ route('admin.types_contenus.index') }}"
                   class="text-gray-500 hover:text-gray-700 font-medium">
                    Annuler
                </a>
            </div>

        </form>

    </div>

</div>
@endsection
