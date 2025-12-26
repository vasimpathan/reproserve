<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\PageController;

Route::get('/', function () {
    return redirect()->route('admin.login');
});
 

Route::prefix('admin')->group(function(){

    Route::get('/', [AuthController::class, 'loginPage'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.post');

    Route::get('forgot-password', [AuthController::class, 'forgotPasswordPage'])->name('admin.forgot');
    Route::post('forgot-password', [AuthController::class, 'sendResetLink'])->name('admin.forgot.post');

    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');

    Route::get('change-password', [AdminController::class, 'changePassword'])->name('admin.change.password');
    Route::post('change-password', [AdminController::class, 'updatePassword'])->name('admin.change.password.update');

    Route::resource('pages', App\Http\Controllers\Admin\PageController::class);

    Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);

    Route::middleware('admin')->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});
