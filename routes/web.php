<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FranchiseTempController;
use App\Http\Controllers\Auth\RegisterController;
Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/franchise_registration', function () {
    return view('frontend.franchise_reg');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/franchise_approval', function () {
    return view('admin.franchise.approval');
});
Route::get('/user_create', function () {
    return view('admin.user.create');
})->name('user_create');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'role:Super Admin'])->group(function () {
    Route::get('/super-admin/dashboard', [SuperAdminController::class, 'index'])->name('super.admin.dashboard');
});

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('franchise_approval', [FranchiseTempController::class, 'index'])->name('franchise.temp.index');

// Route to approve franchise
Route::get('franchise/{id}/approve', [FranchiseTempController::class, 'approve'])->name('franchise.approve');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:Help Desk'])->group(function () {
    Route::get('/help-desk/dashboard', [HelpDeskController::class, 'index'])->name('help.desk.dashboard');
});

Route::middleware(['auth', 'role:Fulfillment Desk'])->group(function () {
    Route::get('/fulfillment-desk/dashboard', [FulfillmentController::class, 'index'])->name('fulfillment.desk.dashboard');
});

// Add similar route groups for other roles...
Route::middleware(['auth', 'role:Franchise'])->group(function () {
    Route::get('franchise/team', [FranchiseTeamController::class, 'index'])->name('franchise.team.index');
    Route::get('franchise/team/create', [FranchiseTeamController::class, 'create'])->name('franchise.team.create');
    Route::post('franchise/team/store', [FranchiseTeamController::class, 'store'])->name('franchise.team.store');
});


Route::post('/franchise_temp/store', [FranchiseTempController::class, 'store'])->name('franchise_temp.store');
Route::get('franchise_approval', [FranchiseTempController::class, 'index'])->name('franchise.temp.index');

// Route to approve franchise
Route::get('franchise/{id}/approve', [FranchiseTempController::class, 'approve'])->name('franchise.approve');


Route::post('/custom-register', [RegisterController::class, 'register'])
    ->name('custom.register.submit');
