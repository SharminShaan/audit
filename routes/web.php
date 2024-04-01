<?php

use App\Http\Controllers\backend\BackendHome;
use App\Http\Controllers\backend\BlogcatController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\homepage\WhoweareController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ThemeOptionsController;
use App\Http\Controllers\FrontendController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

Route::get('/home', [BackendHome::class, 'index'])->name('backend.index');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

/*********************** frontend design route *******************
  ****************************************************************/
Route::get('/company-profile', [FrontendController::class, 'companyprofile']);
Route::get('/meet-our-team', [FrontendController::class, 'meetourteam']);
Route::get('/affiliation', [FrontendController::class, 'affiliation']);
Route::get('/enlistment', [FrontendController::class, 'enlistment']);
Route::get('/membership', [FrontendController::class, 'membership']);
Route::get('/audit-assurance', [FrontendController::class, 'auditassurance']);
Route::get('/taxation-vat', [FrontendController::class, 'taxationvat']);
Route::get('/advisory', [FrontendController::class, 'advisory']);
Route::get('/secretarial-licensing-compliance', [FrontendController::class, 'secretariallicensingcompliance']);
Route::get('/business-service', [FrontendController::class, 'businessservice']);
Route::get('/human-resource-services', [FrontendController::class, 'humanresource']);
Route::get('/training-development', [FrontendController::class, 'trainingdevelopment']);
// client page start
Route::get('/financial-institutions', [FrontendController::class, 'financialinstitutions']);
Route::get('/listed-companies', [FrontendController::class, 'listedcompanies']);
Route::get('/international-clients', [FrontendController::class, 'internationalclients']);
Route::get('/japanese-client', [FrontendController::class, 'japaneseclient']);
// media page start
Route::get('/newsletter', [FrontendController::class, 'newsletter']);
Route::get('/blog', [FrontendController::class, 'blog']);



/*********************** backend  route *******************
  ****************************************************************/
  Route::get('/themeoptions', [ThemeOptionsController::class, 'index'])->name('themeoptions.index');
  Route::post('/themeoptions/update', [ThemeOptionsController::class, 'update'])->name('themeoptions.update');

/*********************** sider design route *******************
  ****************************************************************/
  Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
  Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
  Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
  Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
  Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
  Route::get('/slider/delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');


/*********************** Home Page design route *******************
  ****************************************************************/
  Route::get('/whoweare', [WhoweareController::class, 'index'])->name('homepage.whoweare');
  Route::post('/whoweare/update', [WhoweareController::class, 'update'])->name('whoweare.update');


// category routes
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

//subcategory routes
Route::get('/subcategory/index', [SubcategoryController::class, 'index'])->name('subcategory.index');
Route::get('/subcategory/create', [SubcategoryController::class, 'create'])->name('subcategory.create');
Route::post('/subcategory/store', [SubcategoryController::class, 'store'])->name('subcategory.store');
Route::get('/subcategory/edit/{id}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
Route::put('/subcategory/update/{id}', [SubcategoryController::class, 'update'])->name('subcategory.update');
Route::delete('/subcategory/delete/{id}', [SubcategoryController::class, 'destroy'])->name('subcategory.destroy');


//  blog category routes
Route::get('/blogcat/index', [BlogcatController::class, 'index'])->name('blogcat.index');
Route::get('/blogcat/create', [BlogcatController::class, 'create'])->name('blogcat.create');
Route::post('/blogcat/store', [BlogcatController::class, 'store'])->name('blogcat.store');
Route::get('/blogcat/edit/{id}', [BlogcatController::class, 'edit'])->name('blogcat.edit');
Route::put('/blogcat/update/{id}', [BlogcatController::class, 'update'])->name('blogcat.update');
Route::delete('/blogcat/delete/{id}', [BlogcatController::class, 'destroy'])->name('blogcat.destroy');

//  blog routes
Route::get('/blog/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

//  Service content  routes
Route::get('/servicecon/index', [ServiceController::class, 'index'])->name('servicecon.index');
Route::get('/servicecon/create', [ServiceController::class, 'create'])->name('servicecon.create');
Route::post('/servicecon/store', [ServiceController::class, 'store'])->name('servicecon.store');
Route::get('/servicecon/edit/{id}', [ServiceController::class, 'edit'])->name('servicecon.edit');
Route::put('/servicecon/update/{id}', [ServiceController::class, 'update'])->name('servicecon.update');
Route::delete('/servicecon/delete/{id}', [ServiceController::class, 'destroy'])->name('servicecon.destroy');


