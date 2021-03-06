<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContentPageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryGroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\ManageSectionController;
use League\CommonMark\Node\Block\Document;

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

// Route::get(
//     '/theme',
//     function () {
//         return view("admin.theme");
//     }
// );

// Route::get('Category/destroy/{id}', [CategoryController::class, "destroy"]);
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/', [HomeController::class, "index"])->name('home');
    Route::resource('Blog', BlogController::class);
    Route::resource('Category', CategoryController::class);
    Route::resource('Company', CompanyController::class);

    Route::resource('ContentPage', ContentPageController::class);
    Route::get('Content/{page_id}',[ContentPageController::class,"index"]);
    Route::resource('Gallery', GalleryController::class);
    Route::resource('GalleryGroup', GalleryGroupController::class);
    Route::resource('News', NewsController::class);
    Route::resource('Product', ProductController::class);
    Route::resource('Testimonial', TestimonialController::class);
    Route::resource('Youtube', YoutubeController::class);
    Route::resource('User', UserAdminController::class);

    Route::resource('managesection', ManageSectionController::class);

    // Route::resource('Document', DocumentController::class);
    // Route::get("/documentlist/{group_id}", [DocumentController::class, "index"]);
    // Route::get("/documentlist/create/{group_id}", function ($group_id) {
    //     $doc_id = DB::table('document')->insertGetId(
    //         [
    //             'doc_group_id' => $group_id,
    //             'cby' => Auth::user()->name,
    //             'cdate' => date('Y-m-d H:i:s'),
    //             'udate' => date('Y-m-d H:i:s')
    //         ]
    //     );
    //     return redirect("/Document/$doc_id/edit");
    // });

    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
