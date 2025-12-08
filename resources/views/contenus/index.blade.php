@extends('admin.dashboard') {{-- Layout principal --}}

@section('title', 'Liste des contenus')

@section('content')
<style>
/* CONTAINER */
.table-container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 24px;
    background-color: #f3f4f6; /* fond clair */
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    color: #111827;
    font-family: 'Poppins', 'Roboto', 'Inter', sans-serif;
}

/* TITRE */
.table-container h1 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 24px;
}

/* MESSAGE SUCCESS */
.alert-success {
    background-color: #d1fae5;
    color: #065f46;
    padding: 12px 16px;
    border-radius: 12px;
    margin-bottom: 20px;
    font-weight: 500;
}

/* BOUTON AJOUTER */
.btn-add {
    background-color: #3b82f6;
    color: #fff;
    padding: 10px 16px;
    border-radius: 10px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    margin-bottom: 20px;
    transition: background-color 0.3s, transform 0.2s;
}
.btn-add:hover {
    background-color: #2563eb;
    transform: translateY(-2px);
}

/* TABLE */
.table-container table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.table-container th,
.table-container td {
    padding: 12px 16px;
    text-align: left;
    font-weight: 500;
    border-bottom: 1px solid #e5e7eb;
}

.table-container th {
    background-color: #e0e7ff;
    color: #1e293b;
    font-weight: 600;
}

.table-container tbody tr:hover {
    background-color: #f3f4f6;
    transition: background-color 0.2s;
}

/* ACTIONS */
.table-actions {
    display: flex;
    gap: 8px;
}

.table-actions a,
.table-actions button {
    padding: 6px 10px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.2s, transform 0.15s;
    text-decoration: none;
    border: none;
    color: #fff;
}

/* EDIT */
.table-actions .btn-edit {
    background-color: #facc15;
}
.table-actions .btn-edit:hover {
    background-color: #eab308;
    transform: translateY(-1px);
}

/* DELETE */
.table-actions .btn-delete {
    background-color: #ef4444;
}
.table-actions .btn-delete:hover {
    background-color: #b91c1c;
    transform: translateY(-1px);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .table-container table, 
    .table-container thead, 
    .table-container tbody, 
    .table-container th, 
    .table-container td, 
    .table-container tr {
        display: block;
    }

    .table-container th {
        position: absolute;
        top: -9999px;
        left: -9999px;
    }

    .table-container td {
        position: relative;
        padding-left: 50%;
        border-bottom: 1px solid #e5e7eb;
    }

    .table-container td:before {
        content: attr(data-label);
        position: absolute;
        left: 16px;
        top: 12px;
        font-weight: 600;
        color: #111827;
    }

    .table-actions {
        justify-content: flex-start;
        gap: 4px;
    }
}
</style>

<div class="table-container">
    <h1>Liste des contenus</h1>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.contenus.create') }}" class="btn-add">
        ➕ Ajouter un contenu
    </a>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Type</th>
                <th>Auteur</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($contenus as $contenu)
            <tr>
                <td data-label="Titre">{{ $contenu->titre }}</td>
                <td data-label="Type">{{ $contenu->type->nom ?? '-' }}</td>
                <td data-label="Auteur">{{ $contenu->auteur->nom ?? '-' }}</td>
                <td data-label="Statut">{{ $contenu->statut }}</td>

                <td data-label="Actions" class="table-actions">
                    <a href="{{ route('admin.contenus.edit', $contenu->id) }}" class="btn-edit">✏️</a>

                    <form action="{{ route('admin.contenus.destroy', $contenu->id) }}" method="POST" onsubmit="return confirm('Supprimer ce contenu ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">🗑️</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
