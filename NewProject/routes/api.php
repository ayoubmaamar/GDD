<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('students', StudentController::class);

Route::apiResource('languages', LanguageController::class);

Route::apiResource('services', ServiceController::class);

Route::apiResource('users', UserTableController::class);

Route::apiResource('user-types', UserTypeController::class);

Route::apiResource('student-identities', StudentIdentityController::class);

Route::apiResource('school-levels', SchoolLevelController::class);

Route::apiResource('service-packs', ServicePackController::class);

Route::apiResource('tutors', TutorController::class);

Route::apiResource('document-lists', DocumentListController::class);

Route::post('students/{studentId}/languages', [StudentController::class, 'addLanguage']);
Route::delete('students/{studentId}/languages/{languageId}', [StudentController::class, 'removeLanguage']);
