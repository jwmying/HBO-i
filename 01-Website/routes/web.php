<?php

use App\Http\Controllers\CmsDashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CmsDomainDescriptionController;
use App\Http\Controllers\CmsNewsController;
use App\Http\Controllers\CmsAgendaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomainDescriptionController;
use App\Http\Controllers\KnowledgeBaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CmsMembersController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\NewsPageController;
use Illuminate\Support\Facades\Route;

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

// Public Routes
Route::resource('/', HomeController::class);
Route::resource('/over', AboutController::class);
Route::resource('/domeinbeschrijving', DomainDescriptionController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/kennisbank', KnowledgeBaseController::class);
Route::resource('/agenda', AgendaController::class);
Route::resource('/nieuws', NewsPageController::class)->names('news');

// RSS Feeds
Route::prefix('rss')->name('rss.')->group(function () {
    Route::get('/domeinbeschrijving', [DomainDescriptionController::class,'generateRSSFeed'])->name('domain.description');
    Route::get('/agenda', [AgendaController::class,'generateRSSFeed'])->name('agenda');
    Route::get('/nieuws', [NewsPageController::class,'generateRSSFeed'])->name('news');
});

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
Route::get('/download/agenda', [DownloadController::class, 'DownloadAgenda']);

// Admin Routes
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('dashboard', CmsDashboardController::class);
        Route::resource('domeinbeschrijving', CmsDomainDescriptionController::class)->names('domain.description');
        Route::resource('nieuws', CmsNewsController::class)->names('news');
        Route::resource('agenda', CmsAgendaController::class)->names('agenda');
        Route::resource('leden', CmsMembersController::class)->names('members');
    });
    Route::get('/logout', [CmsDashboardController::class, 'logout'])->name('logout');
});

// Do not delete :)
require __DIR__ . '/auth.php';
