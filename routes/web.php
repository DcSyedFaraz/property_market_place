<?php

use App\Http\Controllers\Admin\AgentPropertyController;
use App\Http\Controllers\Admin\AgentsController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\BlogController;
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
use App\Http\Controllers\Admin\TeamController;



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

Route::get('/lang/{lang}', function ($lang) {
    if (!in_array($lang, ['en', 'ar'])) {
        abort(400);
    }
    session(['locale' => $lang]);
    return back();
})->name('lang.switch');

require __DIR__ . '/auth.php';

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/properties', 'filter')->name('properties.index');
    Route::get('/properties/{location}', 'showPropertiesByLocation')->name('properties.byLocation');
    Route::get('/offplan/{id}', 'projects')->name('projects');
    Route::get('/about-us', 'about_us')->name('about_us');
    Route::get('/leadership', 'leadership')->name('leadership');
    Route::get('/leadership/{slug}', 'leadership_detail')->name('leadership.detail');

    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{slug}', 'blogdetail')->name('blog.show');

    // Route::get('/vendors/registration', 'registration')->name('registration');

    Route::get('/inner-blog', 'inner_blog')->name('inner_blog');
    Route::get('/contact-us', 'contact_us')->name('contact_us');
    Route::get('/offplan', 'offplan')->name('offplan');
    Route::get('/developer-list', 'developer_list')->name('developer_list');
    Route::get('/location', 'location')->name('location');
    Route::get('/project-community', 'project_community')->name('project_community');
    Route::get('/service', 'service')->name('service');
    Route::get('/secondary-sale', 'secondary_sale')->name('secondary_sale');
    Route::get('/property-details/{id}', 'property_details')->name('property_details');
    Route::get('/new-articles', 'new_articles')->name('new_articles');
    Route::get('/community/{id}', 'community')->name('community');
    Route::get('/address-residence/{id}', 'address_residence')->name('address_residence');
    Route::get('/payment-plan/{id}', 'payment_plan')->name('payment_plan');
    Route::get('/location-map/{id}', 'location_map')->name('location_map');
    Route::get('/master-plan/{id}', 'master_plan')->name('master_plan');
    Route::get('/floor-plan/{id}', 'floor_plan')->name('floor_plan');
    Route::get('/community-page/{id}', 'community_page')->name('community_page');
    Route::get('/developer-page/{id}', 'developer_page')->name('developer_page');
    Route::get('/term-condition', 'TermCondition')->name('term-condition');
    Route::get('/privacy-policy', 'PrivacyPolicy')->name(name: 'privacy-policy');
    // Route::get('/offplan/search',  'filter')->name('offplan_search');

});
Route::get('/complain', [FrontendController::class, 'showForm'])->name('complaint.form');
Route::post('/complaint-submit', [FrontendController::class, 'submitForm'])->name('complaint.submit');
Route::get('/search/offplan', [FrontendController::class, 'filter'])->name('offplan_search');

Route::get('/visitor', [FrontendController::class, 'visitForm'])->name('visitor.form');
Route::post('/visitor-submit', [FrontendController::class, 'submitVisit'])->name('visitor.submit');

Route::get('/vendors/registration', [FrontendController::class, 'registration'])->name('registration.form');
Route::post('/vendors/registration-submit', [FrontendController::class, 'submitRegistration'])->name('registration.submit');

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
    Route::resource('property', AgentPropertyController::class);
    Route::resource('developers', DeveloperController::class);
    Route::resource('Amenity', AmenityController::class);
    Route::resource('master-plans', MasterPlanController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('developer_properties', DeveloperPropertyController::class);
    Route::resource('communities', CommunityController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('team', TeamController::class);
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
