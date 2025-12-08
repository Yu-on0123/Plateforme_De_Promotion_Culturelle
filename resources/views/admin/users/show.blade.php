@extends('admin.dashboard')

@section('title', 'Détails utilisateur')

@section('content')

<div class="max-w-3xl mx-auto">

    <div class="bg-white shadow-lg rounded-xl p-6 mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center gap-2">
            👤 Détails de l'utilisateur
        </h2>

        <div class="flex items-center gap-6 flex-wrap">

            <!-- PHOTO -->
            <div class="w-32 h-32 rounded-full overflow-hidden shadow-md border">
                <img src="{{ $user->photo }}" 
                     alt="Photo utilisateur" 
                     class="w-full h-full object-cover">
            </div>

            <!-- INFOS -->
            <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-3">

                <div>
                    <p class="text-gray-500 text-sm">Nom complet</p>
                    <p class="font-semibold">{{ $user->nom }} {{ $user->prenom }}</p>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Email</p>
                    <p class="font-semibold">{{ $user->email }}</p>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Rôle</p>
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">
                        {{ $user->role }}
                    </span>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Sexe</p>
                    <p class="font-semibold">{{ $user->sexe }}</p>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Langue</p>
                    <p class="font-semibold">
                        {{ $user->langue ? $user->langue->nom : '-' }}
                    </p>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Date de naissance</p>
                    <p class="font-semibold">{{ $user->date_naissance }}</p>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Statut</p>
                    <span class="px-3 py-1 bg-gray-100 rounded-lg text-sm font-medium">
                        {{ $user->statut }}
                    </span>
                </div>

            </div>
        </div>

        <!-- BOUTONS D’ACTION -->
        <div class="mt-6 flex gap-3">

            <a href="{{ route('admin.users.index') }}" 
               class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 transition text-sm">
                ⬅ Retour
            </a>

            <a href="{{ route('admin.users.edit', $user->id) }}" 
               class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white transition text-sm">
                ✏️ Modifier
            </a>

        </div>

    </div>

</div>

@endsection
