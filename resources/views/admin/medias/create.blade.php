{{-- resources/views/admin/medias/create.blade.php --}}
@extends('admin.dashboard')

@section('title', 'Ajouter un Média')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <div class="bg-white rounded-2xl shadow-lg w-full p-8 transform transition hover:scale-105 hover:shadow-2xl">

        <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">Ajouter un média</h1>

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


        <form action="{{ route('admin.medias.store') }}" 
        method="POST" 
        enctype="multipart/form-data"
        class="space-y-4">
  
      @csrf
  
      <div>
          <label class="block mb-1 font-medium text-gray-700">Fichier média</label>
          <input type="file" name="media_file" required
                 class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">
      </div>
   

        {{-- <form action="{{ route('admin.medias.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-medium text-gray-700">Chemin</label>
                <input type="text" name="chemin" value="{{ old('chemin') }}" required
                       class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">
            </div> --}}

            <div>
                <label class="block mb-1 font-medium text-gray-700">Type</label>
                <select name="id_typemedia" required
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">
                    <option value="">-- Choisir un type --</option>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" @if(old('id_typemedia') == $type->id) selected @endif>
                            {{ $type->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Contenu lié</label>
                <select name="id_contenu" required
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">
                    <option value="">-- Choisir un contenu --</option>
                    @foreach($contenus as $contenu)
                        <option value="{{ $contenu->id }}" @if(old('id_contenu') == $contenu->id) selected @endif>
                            {{ $contenu->titre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Description</label>
                <textarea name="description" rows="3"
                          class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-500">{{ old('description') }}</textarea>
            </div>

            <div class="flex gap-3 justify-end mt-4 flex-wrap">
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow-md transition flex items-center justify-center">
                    Créer
                </button>

                <a href="{{ route('admin.medias.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md transition flex items-center justify-center">
                    Annuler
                </a>
            </div>

        </form>

    </div>

</div>
@endsection
