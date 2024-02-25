<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});

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
        // Placez ici les routes accessibles uniquement par les administrateurs
        // Par exemple, la gestion des utilisateurs, des rôles, etc.
    });

    // Exemple de route pour les utilisateurs avec le rôle "etudiant"
    Route::middleware(['checkrole:etudiant'])->group(function () {
        // Placez ici les routes accessibles uniquement par les étudiants
        // Par exemple, accéder à des cours, soumettre des devoirs, etc.
    });

    // Vous pouvez ajouter d'autres groupes de middleware pour d'autres rôles comme "tuteur" et "gestionnaire" selon vos besoins
});

// Inclusion des routes d'authentification fournies par Laravel Breeze, Jetstream, etc.
require __DIR__.'/auth.php';

