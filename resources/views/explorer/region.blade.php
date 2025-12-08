@extends('user.dashboard')

@section('title', 'Contenus - ' . $region->nom)

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2><i class="fas fa-map-marker-alt text-success me-2"></i> Région : {{ $region->nom }}</h2>
            @if($region->description)
                <p class="text-muted">{{ $region->description }}</p>
            @endif
        </div>
        <a href="{{ route('user.explorer.contenus.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i> Retour
        </a>
    </div>

    <!-- Region Stats -->
    @if($region->population || $region->superficie)
        <div class="row mb-4">
            @if($region->population)
                <div class="col-md-3">
                    <div class="card border-0 bg-success text-white">
                        <div class="card-body text-center">
                            <h5><i class="fas fa-users"></i></h5>
                            <h4>{{ number_format($region->population, 0, ',', ' ') }}</h4>
                            <p class="mb-0">Population</p>
                        </div>
                    </div>
                </div>
            @endif
            @if($region->superficie)
                <div class="col-md-3">
                    <div class="card border-0 bg-info text-white">
                        <div class="card-body text-center">
                            <h5><i class="fas fa-mountain"></i></h5>
                            <h4>{{ number_format($region->superficie, 0, ',', ' ') }} km²</h4>
                            <p class="mb-0">Superficie</p>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-md-3">
                <div class="card border-0 bg-primary text-white">
                    <div class="card-body text-center">
                        <h5><i class="fas fa-book"></i></h5>
                        <h4>{{ $contenus->total() }}</h4>
                        <p class="mb-0">Contenus</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-warning text-white">
                    <div class="card-body text-center">
                        <h5><i class="fas fa-language"></i></h5>
                        @php
                            $languesCount = \App\Models\Contenu::where('id_region', $region->id)
                                ->where('statut', 'publié')
                                ->distinct('id_langue')
                                ->count('id_langue');
                        @endphp
                        <h4>{{ $languesCount }}</h4>
                        <p class="mb-0">Langues</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($contenus->isEmpty())
        <div class="text-center py-5">
            <i class="fas fa-map-marked-alt fa-4x text-muted mb-4"></i>
            <h4 class="mb-3">Aucun contenu pour cette région</h4>
            <p class="text-muted mb-4">Soyez le premier à partager un contenu sur {{ $region->nom }}</p>
            <a href="{{ route('user.contenus.create') }}" class="btn btn-success">
                <i class="fas fa-plus-circle me-2"></i> Créer un contenu
            </a>
        </div>
    @else
        <!-- Contents Grid -->
        <div class="row">
            @foreach($contenus as $contenu)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">{{ Str::limit($contenu->titre, 40) }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                {{ Str::limit(strip_tags($contenu->texte), 100) }}
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-primary">
                                    <i class="fas fa-language me-1"></i> {{ $contenu->langue->nom ?? 'Français' }}
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
                            <a href="{{ route('user.explorer.contenus.show', $contenu) }}" 
                               class="btn btn-outline-success btn-sm">
                                <i class="fas fa-eye me-1"></i> Découvrir
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