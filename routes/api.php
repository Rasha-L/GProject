<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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
Route::controller(AuthController::class)->group(function() {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});


// الحصول على بيانات المستخدم المُسجل حاليًا
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request-> user();});
// مسارات تسجيل الدخول، التسجيل، والخروج
//Route::post('register', [AuthController::class, 'register']); // تسجيل مستخدم جديد
//Route::post('login', [AuthController::class, 'login']);       // تسجيل الدخول
//Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum'); // تسجيل الخروج
//Route::get('me', [AuthController::class, 'me'])->middleware('auth:sanctum');         // بيانات المستخدم


