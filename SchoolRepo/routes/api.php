<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseGroupController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Models\Course;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Builder\Stub;

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



Route::controller(StudentController::class)->group(function () {
    Route::get('/students','index');
    Route::get('/students/{id}','show');
    Route::get('/students/{id}/group','getGroup');
});

Route::prefix('groups')->group  (function () {
    Route::get('/',[GroupController::class ,'index']);
    Route::get('/{id}', [GroupController::class ,'show']);
    Route::get('/{id}/students', [GroupController::class ,'getStudents']);
    Route::get('/{id}/courses', [GroupController::class ,'getCourses']);

});

Route::prefix('courses')->group(function () {
    Route::get('/', [CourseController::class, 'index']);
    Route::get('/{id}', [CourseController::class, 'show']);
    Route::get('/{id}/groups', [CourseController::class, 'getGroups']);
    Route::get('/{id}/students', [CourseController::class, 'getStudents']);
});