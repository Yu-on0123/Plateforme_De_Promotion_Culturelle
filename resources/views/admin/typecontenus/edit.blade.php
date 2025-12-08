{{-- resources/views/admin/types_contenus/edit.blade.php --}}
@extends('admin.dashboard')

@section('title', 'Modifier Type de Contenu')

@section('content')
<div class="max-w-lg mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <div class="bg-white rounded-2xl shadow-lg p-8 transform transition hover:scale-105 hover:shadow-2xl">

        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Modifier : {{ $type->nom }}
        </h1>

        <form action="{{ route('admin.types_contenus.update', $type->id) }}"
              method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 font-medium text-gray-700">Nom du type :</label>
                <input type="text" name="nom" value="{{ old('nom', $type->nom) }}" required
                       class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500">
                @error('nom')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow-md transition">
                    Mettre à jour
                </button>

                <a href="{{ route('admin.types_contenus.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md transition">
                    Annuler
                </a>
            </div>

        </form>

    </div>

</div>
@endsection
