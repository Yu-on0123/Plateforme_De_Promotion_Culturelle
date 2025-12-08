@extends('admin.dashboard')

@section('title', 'Créer un contenu')

@section('content')
<style>
/* FORMULAIRE DANS LE DASHBOARD */
.main .container {
    max-width: 720px;
    margin: 40px auto;
    padding: 24px;
    background-color: #f9fafb; /* clair mais neutre */
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    color: #111827;
    font-family: 'Poppins', 'Roboto', 'Inter', sans-serif;
}

/* TITRE */
.main .container h1 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 24px;
}

/* ERREURS */
.main .container .alert-errors {
    background-color: #fee2e2;
    color: #b91c1c;
    padding: 16px;
    border-radius: 12px;
    margin-bottom: 24px;
    font-weight: 500;
}

/* FORMULAIRE */
.main .container form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.main .container form label {
    font-weight: 600;
    margin-bottom: 6px;
    color: #111827;
}

/* CHAMPS */
.main .container form input[type="text"],
.main .container form select,
.main .container form textarea {
    width: 100%;
    padding: 12px 14px;
    border-radius: 10px;
    border: 1px solid #d1d5db;
    background-color: #ffffff;
    color: #111827;
    font-size: 1rem;
    transition: border 0.2s, box-shadow 0.2s;
}

.main .container form input[type="text"]:focus,
.main .container form select:focus,
.main .container form textarea:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59,130,246,0.2);
    outline: none;
}

/* BOUTONS */
.main .container .form-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.main .container .btn {
    padding: 12px 20px;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    text-align: center;
    text-decoration: none;
}

.main .container .btn-submit {
    background-color: #10b981;
    color: #fff;
}

.main .container .btn-submit:hover {
    background-color: #059669;
    transform: translateY(-2px);
}

.main .container .btn-cancel {
    background-color: #6b7280;
    color: #fff;
}

.main .container .btn-cancel:hover {
    background-color: #4b5563;
    transform: translateY(-2px);
}

/* RESPONSIVE */
@media (max-width: 640px) {
    .main .container { padding: 16px; margin: 20px; }
    .main .container .form-actions { flex-direction: column; }
}
</style>

<div class="container">
    <h1>Ajouter un nouveau contenu</h1>

    @if ($errors->any())
        <div class="alert-errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.contenus.store') }}" method="POST">
        @csrf

        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" required>
        </div>

        <div>
            <label for="id_type">Type</label>
            <select name="id_type" id="id_type" required>
                <option value="">-- Choisir un type --</option>
                @foreach(\App\Models\TypeContenu::all() as $type)
                    <option value="{{ $type->id }}">{{ $type->nom }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="id_auteur">Auteur</label>
            <select name="id_auteur" id="id_auteur" required>
                <option value="">-- Choisir un auteur --</option>
                @foreach(\App\Models\User::all() as $user)
                    <option value="{{ $user->id }}">{{ $user->nom }} {{ $user->prenom }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="texte">Texte</label>
            <textarea name="texte" id="texte" rows="5"></textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-submit">Créer</button>
            <a href="{{ route('admin.contenus.index') }}" class="btn btn-cancel">Annuler</a>
        </div>
    </form>
</div>
@endsection
