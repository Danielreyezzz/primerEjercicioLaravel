<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Mockery\Matcher\Subset;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StudentController::class, 'inicio']);
Route::get('/subject/{id?}', [SubjectController::class, 'inicio'], function($id = 1){
    return $id;
});
