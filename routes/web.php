<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Contrôleurs Admin
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LangueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\TypeContenuController;
use App\Http\Controllers\TypeMediaController;

// Contrôleurs ManageAccess
use App\Http\Controllers\ManageAccess\{
    CommentaireController as UserCommentaireController,
    ExplorerController
};
use App\Http\Controllers\ManageAccess\User\DashboardController as UserDashboardController;
use App\Http\Controllers\ManageAccess\Contributeur\{
    DashboardController as ContributeurDashboardController,
    ContenuController as ContributeurContenuController,
    MediaController as ContributeurMediaController
};

// Contrôleur Breeze
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Redirection racine
|--------------------------------------------------------------------------
*/
Route::get('/continue', function () {
    return Auth::check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
})->name('continue');

Route::get('/', function () {
    return view('open');
})->name('open');

/*
|--------------------------------------------------------------------------
| Page Welcome + bouton Continuer
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('dashboard');

    Route::post('/welcome/continue', function () {
        $role = Auth::user()->role;
        return match ($role) {
            'admin' => redirect()->route('admin.dashboard'),
            'contributeur' => redirect()->route('contributeur.dashboard'),
            default => redirect()->route('user.dashboard'),
        };
    })->name('welcome.continue');
});

/*
|--------------------------------------------------------------------------
| Routes Admin
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware(['auth', 'can:access-admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('langues', LangueController::class);
    Route::resource('users', UserController::class)->except(['show']);
    Route::get('users/search', [UserController::class, 'searchForm'])->name('users.search.form');
    Route::post('users/search', [UserController::class, 'search'])->name('users.search');
    Route::resource('contenus', ContenuController::class);
    Route::resource('regions', RegionController::class);
    Route::resource('medias', MediaController::class);
    Route::resource('commentaires', CommentaireController::class);
    Route::resource('types_contenus', TypeContenuController::class);
    Route::resource('types_medias', TypeMediaController::class);
});

/*
|--------------------------------------------------------------------------
| Routes Publiques (Explorateur)
|--------------------------------------------------------------------------
*/
Route::prefix('explorer')->name('explorer.')->group(function () {
    Route::get('/', [ExplorerController::class, 'index'])->name('index');
    Route::get('/recherche', [ExplorerController::class, 'recherche'])->name('recherche');
    Route::get('/contenus/{contenu}', [ExplorerController::class, 'show'])->name('show');
    
    // Routes protégées pour les commentaires
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/contenus/{contenu}/commenter', [ExplorerController::class, 'commenterForm'])->name('commenter.form');
        Route::post('/contenus/{contenu}/commenter', [ExplorerController::class, 'commenter'])->name('commenter');
    });
    
    Route::get('/regions/{region}', [ExplorerController::class, 'parRegion'])->name('region');
    Route::get('/langues/{langue}', [ExplorerController::class, 'parLangue'])->name('langue');
    Route::get('/types/{type}', [ExplorerController::class, 'parType'])->name('type');
});

/*
|--------------------------------------------------------------------------
| Routes Utilisateur Simple
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->prefix('user')->name('user.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    
    // Gestion des commentaires personnels
    Route::prefix('commentaires')->name('commentaires.')->group(function () {
        Route::get('/', [UserCommentaireController::class, 'index'])->name('index');
        Route::get('/create', [UserCommentaireController::class, 'create'])->name('create');
        Route::post('/', [UserCommentaireController::class, 'store'])->name('store');
        Route::get('/{commentaire}', [UserCommentaireController::class, 'show'])->name('show');
        Route::get('/{commentaire}/edit', [UserCommentaireController::class, 'edit'])->name('edit');
        Route::put('/{commentaire}', [UserCommentaireController::class, 'update'])->name('update');
        Route::delete('/{commentaire}', [UserCommentaireController::class, 'destroy'])->name('destroy');
    });
});

/*
|--------------------------------------------------------------------------
| Routes Contributeur
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->prefix('contributeur')->name('contributeur.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [ContributeurDashboardController::class, 'dashboard'])->name('dashboard');
    
    // CRUD des contenus
    Route::resource('contenus', ContributeurContenuController::class);
    
    // CRUD des médias
    Route::prefix('medias')->name('medias.')->group(function () {
        Route::get('/', [ContributeurMediaController::class, 'index'])->name('index');
        Route::get('/create', [ContributeurMediaController::class, 'create'])->name('create');
        Route::post('/', [ContributeurMediaController::class, 'store'])->name('store');
        Route::get('/{media}', [ContributeurMediaController::class, 'show'])->name('show');
        Route::get('/{media}/edit', [ContributeurMediaController::class, 'edit'])->name('edit');
        Route::put('/{media}', [ContributeurMediaController::class, 'update'])->name('update');
        Route::delete('/{media}', [ContributeurMediaController::class, 'destroy'])->name('destroy');
        Route::get('/contenu/{contenu}', [ContributeurMediaController::class, 'parContenu'])->name('par-contenu');
        Route::get('/{media}/download', [ContributeurMediaController::class, 'download'])->name('download');
    });
    
    // Gestion des commentaires personnels (identique aux utilisateurs)
    Route::prefix('commentaires')->name('commentaires.')->group(function () {
        Route::get('/', [UserCommentaireController::class, 'index'])->name('index');
        Route::get('/create', [UserCommentaireController::class, 'create'])->name('create');
        Route::post('/', [UserCommentaireController::class, 'store'])->name('store');
        Route::get('/{commentaire}', [UserCommentaireController::class, 'show'])->name('show');
        Route::get('/{commentaire}/edit', [UserCommentaireController::class, 'edit'])->name('edit');
        Route::put('/{commentaire}', [UserCommentaireController::class, 'update'])->name('update');
        Route::delete('/{commentaire}', [UserCommentaireController::class, 'destroy'])->name('destroy');
    });
});

/*
|--------------------------------------------------------------------------
| Routes Communes pour les commentaires (alias)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->prefix('mes-commentaires')->name('commentaires.')->group(function () {
    Route::get('/', [UserCommentaireController::class, 'index'])->name('index');
    Route::get('/create', [UserCommentaireController::class, 'create'])->name('create');
    Route::post('/', [UserCommentaireController::class, 'store'])->name('store');
    Route::get('/{commentaire}', [UserCommentaireController::class, 'show'])->name('show');
    Route::get('/{commentaire}/edit', [UserCommentaireController::class, 'edit'])->name('edit');
    Route::put('/{commentaire}', [UserCommentaireController::class, 'update'])->name('update');
    Route::delete('/{commentaire}', [UserCommentaireController::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Profil utilisateur Breeze
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';