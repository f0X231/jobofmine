<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EmployeeController;
/* CMS Controller */
use App\Http\Controllers\Cms\DashboardController;
use App\Http\Controllers\Cms\DoctorController as CMSDoctorController;
use App\Http\Controllers\Cms\ArticleController as CMSArticleController;
use App\Http\Controllers\Cms\ServiceController as CMSServiceController;
use App\Http\Controllers\Cms\SeoController as CMSSeoController;
use App\Http\Controllers\Cms\UserController as CMSUserController;
use App\Http\Controllers\Cms\GroupController as CMSGroupController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::resource('contact', 'ContactController')->middleware('auth');

/* Change language */
//if(file_exists(app_path('Http/Controllers/LocalizationController.php')))
    //Route::get('lang/{locale}', 'LocalizationController@lang');
/*Route::get('lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});*/


/* fontend Route */
Route::get('/',                                     [HomeController::class, 'index']);
Route::get('index',                                 [HomeController::class, 'index']);
Route::get('home',                                  [HomeController::class, 'index']);
Route::get('privacy-policy',                        [HomeController::class, 'policy']);
Route::get('aboutus',                               [AboutusController::class, 'index']);
Route::get('doctor',                                [DoctorController::class, 'index']);
Route::get('doctor/{id}/{name}',                    [DoctorController::class, 'profile']);
Route::get('psychologist',                          [DoctorController::class, 'indexPsychiatrist']);
Route::get('psychologist/{id}/{name}',              [DoctorController::class, 'profilePsychiatrist']);
Route::get('occupational-therapist',                [DoctorController::class, 'indexOccupational']);
Route::get('occupational-therapist/{id}/{name}',    [DoctorController::class, 'profileOccupational']);
Route::get('employee-program',                      [EmployeeController::class, 'index']);
Route::get('employee-program/{id}/{name}',          [EmployeeController::class, 'detail']);
Route::get('services',                              [ServiceController::class, 'index']);
Route::get('services/{id}/{name}',                  [ServiceController::class, 'detail']);
Route::get('articles',                              [ArticleController::class, 'index']);
Route::get('articles/{id}/{name}',                  [ArticleController::class, 'detail']);
/* Login to system. */
/* CMS */
Route::prefix('cms')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('index', [DashboardController::class, 'index']);
    Route::get('home', [DashboardController::class, 'index']);

    Route::get('users', [CMSUserController::class, 'index']);
    Route::get('users/add', [CMSUserController::class, 'actionAdd']);
    Route::get('users/edit/{id}/{name}', [CMSUserController::class, 'actionEdit']);

    Route::get('groups', [CMSGroupController::class, 'index']);
    Route::get('groups/add', [CMSGroupController::class, 'actionAdd']);
    Route::get('groups/edit/{id}/{name}', [CMSGroupController::class, 'actionEdit']);

    Route::get('doctor', [CMSDoctorController::class, 'index']);
    Route::get('doctor/add', [CMSDoctorController::class, 'actionAdd']);
    Route::get('doctor/edit/{id}/{name}', [CMSDoctorController::class, 'actionEdit']);

    Route::get('article', [CMSArticleController::class, 'index']);
    Route::get('article/add', [CMSArticleController::class, 'actionAdd']);
    Route::get('article/edit/{id}/{name}', [CMSArticleController::class, 'actionEdit']);
    Route::post('article/save', [CMSArticleController::class, 'actionSave']);

    Route::get('service', [CMSServiceController::class, 'index']);
    Route::get('service/add', [CMSServiceController::class, 'actionAdd']);
    Route::get('service/edit/{id}/{name}', [CMSServiceController::class, 'actionEdit']);

    Route::get('seo', [CMSSeoController::class, 'index']);
    Route::get('seo/add', [CMSSeoController::class, 'actionAdd']);
    Route::get('seo/edit/{id}/{name}', [CMSSeoController::class, 'actionEdit']);

    Route::get('user', [CMSUserController::class, 'index']);
    Route::get('user/add', [CMSUserController::class, 'actionAdd']);
    Route::get('user/edit/{id}/{name}', [CMSUserController::class, 'actionEdit']);
});
