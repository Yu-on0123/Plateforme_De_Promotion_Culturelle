{{-- resources/views/admin/regions/edit.blade.php --}}
@extends('admin.dashboard')

@section('title', 'Modifier la Région')

@section('content')
<div class="max-w-md mx-auto mt-8 bg-white p-6 rounded-2xl shadow-lg transition transform hover:scale-105 hover:shadow-2xl">

    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        Modifier : {{ $region->nom }}
    </h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4 shadow">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.regions.update', $region->id) }}" method="POST" class="flex flex-col gap-4">
        @csrf
        @method('PUT')

        {{-- Nom --}}
        <div class="flex flex-col">
            <label for="nom" class="font-medium text-gray-700 mb-1">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom', $region->nom) }}" required
                   class="border border-gray-300 rounded-lg p-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        {{-- Description --}}
        <div class="flex flex-col">
            <label for="description" class="font-medium text-gray-700 mb-1">Description :</label>
            <textarea id="description" name="description" rows="4" required
                      class="border border-gray-300 rounded-lg p-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $region->description) }}</textarea>
        </div>

        {{-- Population --}}
        <div class="flex flex-col">
            <label for="population" class="font-medium text-gray-700 mb-1">Population :</label>
            <input type="number" id="population" name="population" value="{{ old('population', $region->population) }}"
                   class="border border-gray-300 rounded-lg p-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        {{-- Superficie --}}
        <div class="flex flex-col">
            <label for="superficie" class="font-medium text-gray-700 mb-1">Superficie (km²) :</label>
            <input type="number" step="0.01" id="superficie" name="superficie" value="{{ old('superficie', $region->superficie) }}"
                   class="border border-gray-300 rounded-lg p-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        {{-- Localisation --}}
        <div class="flex flex-col">
            <label for="localisation" class="font-medium text-gray-700 mb-1">Localisation :</label>
            <input type="text" id="localisation" name="localisation" value="{{ old('localisation', $region->localisation) }}"
                   class="border border-gray-300 rounded-lg p-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        {{-- Boutons --}}
        <div class="flex items-center gap-4 mt-4 flex-wrap justify-end">
            <button type="submit"
                    class="bg-yellow-400 hover:bg-yellow-500 text-white font-medium px-4 py-2 rounded-lg shadow-md transition transform hover:scale-105">
                Mettre à jour
            </button>

            <a href="{{ route('admin.regions.index') }}"
               class="text-gray-500 hover:text-gray-700 font-medium transition">
                Annuler
            </a>
        </div>
    </form>

</div>
@endsection
