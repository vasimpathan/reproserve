<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return redirect()->route('admin.login');
});
 

Route::prefix('admin')->group(function(){

    Route::get('/', [AuthController::class, 'loginPage'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.post');

    Route::get('forgot-password', [AuthController::class, 'forgotPasswordPage'])->name('admin.forgot');
    Route::post('forgot-password', [AuthController::class, 'sendResetLink'])->name('admin.forgot.post');
    
    Route::middleware('admin')->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});


// Route::prefix('admin')->group(function(){

//     Route::get('/', [AuthController::class, 'loginPage'])->name('admin.login');
//     Route::post('login', [AuthController::class, 'login'])->name('admin.login.post');

//     Route::get('forgot-password', [AuthController::class, 'forgotPasswordPage'])->name('admin.forgot');
//     Route::post('forgot-password', [AuthController::class, 'sendResetLink'])->name('admin.forgot.post');

//     Route::get('dashboard', [DashboardController::class, 'index'])
//     ->name('admin.dashboard');
    
//     Route::get('logout', [AuthController::class, 'logout'])
//          ->name('admin.logout');

//     // Route::middleware(['auth','is_admin'])->group(function(){

//     //     Route::post('dashboard', [DashboardController::class, 'index'])
//     //     ->name('admin.dashboard');

//     //     Route::get('logout', [AuthController::class, 'logout'])
//     //     ->name('admin.logout');

//     // });
// });
