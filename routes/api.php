<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\UserController;
use App\Models\ScoreQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/prueba', function (Request $request) {
    return response()->json(['message' => 'Hola mundo']);
});

Route::get('/departments', [OtherController::class, 'getDepartments']);
Route::get('/municipalities/{id}', [OtherController::class, 'getMunicipalities']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/recovery', [AuthController::class, 'sendEmailRecoveryPassword']);
Route::post('/validate-recovey-token', [AuthController::class, 'validateRecoveryToken']);
Route::post('/recovery-password', [AuthController::class, 'recoveryPassword']);
Route::post('/sendCodeEnableUser', [UserController::class, 'SendCodeEnableUser']); // Send code to enable user
Route::post('/enableUser', [UserController::class, 'enableUser']); // Enable user

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', [UserController::class, 'user']); // Get user information
    Route::get('/getUser/{id}', [UserController::class, 'find']);
    Route::get('/users/list', [UserController::class, 'list']); // List User Student
    Route::patch('/user', [UserController::class, 'update']); // Update user information
    Route::post('/disable-user', [UserController::class, 'disableUser']); // Disable user

    // Errores
    Route::post('/error', [ErrorController::class, 'store']); // Register error
    Route::get('/error/{id}', [ErrorController::class, 'show']); // Get all errors
    Route::get('/errors', [ErrorController::class, 'indexUser']); // Get errors list
    Route::patch('/error/{id}', [ErrorController::class, 'update']); // Update error


    // Comentarios
    Route::post('/comment', [ErrorController::class, 'storeComment']); // Register comment
    Route::get('/error/{error_id}/comments', [ErrorController::class, 'indexComments']); // Get comments list


    // Etiquetas
    Route::get('/labels', [LabelController::class, 'index']); // Get labels list
    Route::get('/label/{id}', [LabelController::class, 'show']); // Get label
    Route::post('/label/search', [LabelController::class, 'search']); // Search label

    // Gestor de preguntas
    Route::post('/question', [QuestionController::class, 'store']); // Register question
    Route::get('/question/{id}', [QuestionController::class, 'show']); // Get question
    Route::get('/questions', [QuestionController::class, 'index']); // Get questions list
    Route::get('/questions/my', [QuestionController::class, 'myQuestions']); // Get questions list by user
    Route::patch('/question/{id}', [QuestionController::class, 'update']); // Update question NOTA: Falta probar
    Route::delete('/question/{id}', [QuestionController::class, 'destroy']); // Delete question
    Route::post('/question/{id}/validate', [QuestionController::class, 'validateQuestion']); // Validate question

    // Scores al dia
    Route::post('/score', [ScoreController::class, 'storeScore']); // Register score
    Route::get('/questionScore/{id}', [ScoreController::class, 'getQuestionScore']); // Get question
    Route::patch('/questionScore/{id}', [ScoreController::class, 'storeQuestion']); // Update score
    Route::get('/score/{id}', [ScoreController::class, 'getScore']); // Get score
    Route::get('/scores', [ScoreController::class, 'getScores']); // Get scores list

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);


    Route::group(['middleware' => ['admin']], function () {
        Route::get('/users', [AdminController::class, 'users']);
        Route::get('/user/{id}', [AdminController::class, 'showUser']);
        Route::patch('/update-user/{id}', [AdminController::class, 'update']);

        // Errores
        Route::get('/errors-admin', [ErrorController::class, 'index']); // Get errors list

        // Gestor de preguntas
        Route::get('/questions-admin', [QuestionController::class, 'showQuestionWithOptions']); // Get questions list

        // Crear etiquetas solo lo puede hacer el administrador
        Route::post('/label', [LabelController::class, 'store']); // Register label
        Route::patch('/label/{id}', [LabelController::class, 'update']); // Update label
        Route::delete('/label/{id}', [LabelController::class, 'destroy']); // Delete label
    });
});
