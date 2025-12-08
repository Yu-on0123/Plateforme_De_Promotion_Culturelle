{{-- resources/views/admin/regions/create.blade.php --}}
@extends('admin.dashboard')

@section('title', 'Ajouter une Région')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <div class="bg-white rounded-2xl shadow-lg p-8 transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">

        <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">
            Ajouter une région
        </h1>

        {{-- Affichage des erreurs --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded-lg mb-4 shadow-inner">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.regions.store') }}" method="POST" class="space-y-5">
            @csrf

            {{-- Nom --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Nom de la région</label>
                <input type="text" name="nom" value="{{ old('nom') }}" required
                       class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3
                              focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">
            </div>

            {{-- Description --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Description</label>
                <textarea name="description" rows="4" required
                          class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3
                                 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">{{ old('description') }}</textarea>
            </div>

            {{-- Population --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Population</label>
                <input type="number" name="population" value="{{ old('population') }}"
                       class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3
                              focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">
            </div>

            {{-- Superficie --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Superficie (km²)</label>
                <input type="number" step="0.01" name="superficie" value="{{ old('superficie') }}"
                       class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3
                              focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">
            </div>

            {{-- Localisation --}}
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Localisation</label>
                <input type="text" name="localisation" value="{{ old('localisation') }}"
                       class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3
                              focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">
            </div>

            {{-- Boutons --}}
            <div class="flex justify-end gap-3 mt-6 flex-wrap">
                <button type="submit"
                        class="px-5 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md transition">
                    Créer
                </button>

                <a href="{{ route('admin.regions.index') }}"
                   class="px-5 py-2 bg-gray-500 hover:bg-gray-600 text-white font-semibold rounded-lg shadow-md transition">
                    Annuler
                </a>
            </div>

        </form>

    </div>

</div>
@endsection
