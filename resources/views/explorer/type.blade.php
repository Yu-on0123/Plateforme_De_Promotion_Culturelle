@extends('user.dashboard')

@section('title', 'Contenus - ' . $type->nom)

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2><i class="fas fa-tag text-primary me-2"></i> Type : {{ $type->nom }}</h2>
            @if($type->description)
                <p class="text-muted">{{ $type->description }}</p>
            @endif
        </div>
        <a href="{{ route('explorer.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i> Retour
        </a>
    </div>

    <!-- Type Stats -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card border-0 bg-primary text-white">
                <div class="card-body text-center">
                    <h5><i class="fas fa-book"></i></h5>
                    <h4>{{ $contenus->total() }}</h4>
                    <p class="mb-0">Contenus</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 bg-info text-white">
                <div class="card-body text-center">
                    <h5><i class="fas fa-chart-line"></i></h5>
                    <h4>{{ round($contenus->total() / max(\App\Models\Contenu::where('statut', 'publié')->count(), 1) * 100, 1) }}%</h4>
                    <p class="mb-0">Part du total</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 bg-success text-white">
                <div class="card-body text-center">
                    <h5><i class="fas fa-comments"></i></h5>
                    @php
                        $commentairesCount = \App\Models\Commentaire::whereHas('contenu', function($q) use ($type) {
                            $q->where('id_type', $type->id)->where('statut', 'publié');
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
            <i class="fas fa-tag fa-4x text-muted mb-4"></i>
            <h4 class="mb-3">Aucun contenu de type {{ $type->nom }}</h4>
            <p class="text-muted mb-4">Créez le premier contenu de ce type</p>
            <a href="{{ route('contributeur.contenus.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle me-2"></i> Créer un contenu
            </a>
        </div>
    @else
        <!-- Contents Grid -->
        <div class="row">
            @foreach($contenus as $contenu)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-header bg-primary text-white">
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
                                <span class="badge bg-warning">
                                    <i class="fas fa-language me-1"></i> {{ $contenu->langue->nom ?? 'Français' }}
                                </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="fas fa-user me-1"></i> {{ $contenu->auteur->name }}
                                </small>
                                <small class="text-muted">
                                    <i class="far fa-calendar me-1"></i>
                                    {{ $contenu->created_at?->format('d/m/Y') ?? 'Date inconnue' }}                                    
                                </small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="{{ route('explorer.show', $contenu) }}" 
                               class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-eye me-1"></i> Voir
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