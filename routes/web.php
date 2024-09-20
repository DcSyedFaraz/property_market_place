<?php

use App\Http\Controllers\Admin\AgentPropertyController;
use App\Http\Controllers\Admin\AgentsController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\CommunityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DeveloperController;
use App\Http\Controllers\Admin\DeveloperPropertyController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\MasterPlanController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TeacherDashboardController;
use App\Http\Controllers\Admin\StudentDashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('auth/login');
});

require __DIR__ . '/auth.php';

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/about-us', 'about_us')->name('about_us');
    Route::get('/contact-us', 'contact_us')->name('contact_us');
    Route::get('/faqs', 'faqs')->name('faqs');
    Route::get('/marketplace', 'marketplace')->name('marketplace');
    Route::get('/marketplace/details/{id}', 'details')->name('marketplace.details');

    Route::get('/offplan', 'offplan')->name('offplan');
    Route::get('/developer-list', 'developer_list')->name('developer_list');
     Route::get('/location', 'location')->name('location');
    Route::get('/community', 'community')->name('community');
});

// Dashboard and Logout routes
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    // Route::get('/home', [AuthenticatedSessionController::class, 'home'])->name('home');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('users', UserController::class);
    Route::resource('agents', AgentsController::class);
    Route::resource('agentproperty', AgentPropertyController::class);
    Route::resource('developers', DeveloperController::class);
    Route::resource('Amenity', AmenityController::class);
    Route::resource('master-plans', MasterPlanController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('developer_properties', DeveloperPropertyController::class);
    Route::resource('communities', CommunityController::class);





});
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'role:user']], function () {

    Route::get('user/dashboard', [UserController::class, 'user'])->name('user.dashboard');

});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'role:user|admin']], function () {

});





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
