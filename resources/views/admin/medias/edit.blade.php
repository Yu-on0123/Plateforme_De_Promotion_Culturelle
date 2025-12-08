{{-- resources/views/admin/medias/edit.blade.php --}}
@extends('admin.dashboard')

@section('title', 'Modifier un Média')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <div class="bg-white rounded-2xl shadow-lg w-full p-8 transform transition hover:scale-105 hover:shadow-2xl">

        <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">Modifier un média</h1>

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


        <form action="{{ route('admin.medias.update', $media->id) }}" 
            method="POST" 
            enctype="multipart/form-data"  <!-- OBLIGATOIRE -->
            class="space-y-4">
      
          @csrf
          @method('PUT')
      
          <div>
              <label class="block mb-1 font-medium text-gray-700">Nouveau fichier (optionnel)</label>
              <input type="file" name="media_file"
                     class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-500">
          </div>
      
          <!-- On affiche quand même l'ancien chemin -->
          <p class="text-sm text-gray-600 mb-2">
              Fichier actuel :
              <a href="{{ asset('storage/'.$media->chemin) }}" target="_blank" class="text-blue-600 underline">
                  Voir le fichier
              </a>
          </p>
      

        {{-- <form action="{{ route('admin.medias.update', $media->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 font-medium text-gray-700">Chemin</label>
                <input type="text" name="chemin" value="{{ old('chemin', $media->chemin) }}" required
                       class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-500">
            </div> --}}

            <div>
                <label class="block mb-1 font-medium text-gray-700">Type</label>
                <select name="id_typemedia" required
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-500">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" @if(old('id_typemedia', $media->id_typemedia) == $type->id) selected @endif>
                            {{ $type->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Contenu lié</label>
                <select name="id_contenu" required
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-500">
                    @foreach($contenus as $contenu)
                        <option value="{{ $contenu->id }}" @if(old('id_contenu', $media->id_contenu) == $contenu->id) selected @endif>
                            {{ $contenu->titre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Description</label>
                <textarea name="description" rows="3"
                          class="w-full bg-gray-50 border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-500">{{ old('description', $media->description) }}</textarea>
            </div>

            <div class="flex gap-3 justify-end mt-4 flex-wrap">
                <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 px-5 py-2 rounded-lg shadow-md transition flex items-center justify-center">
                    Mettre à jour
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
