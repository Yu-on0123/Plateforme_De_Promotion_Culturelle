@extends('user.dashboard')

@section('title', 'Contenus en ' . $langue->nom)

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2><i class="fas fa-language text-warning me-2"></i> Langue : {{ $langue->nom }}</h2>
            @if($langue->description)
                <p class="text-muted">{{ $langue->description }}</p>
            @endif
            @if($langue->code_langue)
                <span class="badge bg-secondary">Code : {{ $langue->code_langue }}</span>
            @endif
        </div>
        <a href="{{ route('explorer.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i> Retour
        </a>
    </div>

    <!-- Language Stats -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-0 bg-warning text-white">
                <div class="card-body text-center">
                    <h5><i class="fas fa-book"></i></h5>
                    <h4>{{ $contenus->total() }}</h4>
                    <p class="mb-0">Contenus</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-info text-white">
                <div class="card-body text-center">
                    <h5><i class="fas fa-users"></i></h5>
                    @php
                        $auteursCount = \App\Models\Contenu::where('id_langue', $langue->id)
                            ->where('statut', 'publié')
                            ->distinct('id_auteur')
                            ->count('id_auteur');
                    @endphp
                    <h4>{{ $auteursCount }}</h4>
                    <p class="mb-0">Auteurs</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-success text-white">
                <div class="card-body text-center">
                    <h5><i class="fas fa-map-marker-alt"></i></h5>
                    @php
                        $regionsCount = \App\Models\Contenu::where('id_langue', $langue->id)
                            ->where('statut', 'publié')
                            ->distinct('id_region')
                            ->count('id_region');
                    @endphp
                    <h4>{{ $regionsCount }}</h4>
                    <p class="mb-0">Régions</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-primary text-white">
                <div class="card-body text-center">
                    <h5><i class="fas fa-comment"></i></h5>
                    @php
                        $commentairesCount = \App\Models\Commentaire::whereHas('contenu', function($q) use ($langue) {
                            $q->where('id_langue', $langue->id)->where('statut', 'publié');
                        })->count();
                    @endphp
                    <h4>{{ $commentairesCount }}</h4>
                    <p class="mb-0">Commentaires</p>
                </div>
            </div>
        </div>
    </div>

    @if($contenus->isEmpty())
        <div class="text-center py-5">
            <i class="fas fa-language fa-4x text-muted mb-4"></i>
            <h4 class="mb-3">Aucun contenu en {{ $langue->nom }}</h4>
            <p class="text-muted mb-4">Soyez le premier à partager un contenu en {{ $langue->nom }}</p>
            <a href="{{ route('contributeur.contenus.create') }}" class="btn btn-warning">
                <i class="fas fa-plus-circle me-2"></i> Créer un contenu
            </a>
        </div>
    @else
        <!-- Contents Grid -->
        <div class="row">
            @foreach($contenus as $contenu)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-header bg-warning text-white">
                            <h5 class="mb-0">{{ Str::limit($contenu->titre, 40) }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                {{ Str::limit(strip_tags($contenu->texte), 100) }}
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-success">
                                    <i class="fas fa-map-marker-alt me-1"></i> {{ $contenu->region->nom ?? 'Bénin' }}
                                </span>
                                <span class="badge bg-info">
                                    <i class="fas fa-tag me-1"></i> {{ $contenu->type->nom ?? 'Général' }}
                                </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="fas fa-user me-1"></i> {{ $contenu->auteur->name }}
                                </small>
                                <small class="text-muted">
                                    <i class="far fa-calendar me-1"></i>
                                    {{ optional($contenu->created_at)->format('d/m/Y') ?? 'Date inconnue' }}                                    
                                </small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="{{ route('explorer.show', $contenu) }}" 
                               class="btn btn-outline-warning btn-sm">
                                <i class="fas fa-eye me-1"></i> Lire
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $contenus->links() }}
        </div>
    @endif
</div>
@endsection