<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SchoolLevelController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicePackController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DocumentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider. Each route is assigned
| to the "web" middleware group.
|
*/

// Route de la page d'accueil
Route::get('/', function () {
    return view('home');
})->name('home');

// Route du dashboard avec vérification de l'authentification et de la vérification de l'email
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Groupe de routes nécessitant une authentification
Route::middleware(['auth'])->group(function () {
    // Profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Exemple de route protégée par le rôle d'utilisateur "admin"
    Route::middleware(['checkrole:admin'])->group(function () {
        
    });

    // Exemple de route pour les utilisateurs avec le rôle "etudiant"
    Route::middleware(['checkrole:etudiant'])->group(function () {
        // Placez ici les routes accessibles uniquement par les étudiants
        // Par exemple, accéder à des cours, soumettre des devoirs, etc.
    });

    
    // Routes pour la gestion des langues
    Route::get('/languages', [LanguageController::class, 'index'])->name('languages.index');
    Route::get('/languages/create', [LanguageController::class, 'create'])->name('languages.create');
    Route::post('/languages', [LanguageController::class, 'store'])->name('languages.store');
    Route::get('/languages/{language}/edit', [LanguageController::class, 'edit'])->name('languages.edit');
    Route::put('/languages/{language}', [LanguageController::class, 'update'])->name('languages.update');
    Route::delete('/languages/{language}', [LanguageController::class, 'destroy'])->name('languages.destroy');
    
    // Service

    Route::resource('services', ServiceController::class);

    Route::resource('school_levels', SchoolLevelController::class);

    Route::resource('users', UserController::class);

    Route::resource('service_packs', ServicePackController::class);

    // Routes pour les étudiants
    Route::resource('students', StudentController::class);
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

    Route::get('/students/{id}/documents', [StudentController::class, 'showDocuments'])->name('students.documents');

    // Afficher le formulaire pour ajouter un document
    Route::get('/students/{id}/documents/create', [DocumentController::class, 'create'])->name('documents.create');
    
    // Soumettre le nouveau document
    Route::post('/documents/store', [DocumentController::class, 'store'])->name('documents.store');

    // Vous pouvez ajouter d'autres groupes de middleware pour d'autres rôles comme "tuteur" et "gestionnaire" selon vos besoins
});

// Inclusion des routes d'authentification fournies par Laravel Breeze, Jetstream, etc.
require __DIR__.'/auth.php';

