<?php

use App\Http\Controllers\CmsController;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/blog', [WebController::class, 'blog'])->name('blog');
Route::get('/blog/{uri}', [WebController::class, 'article'])->name('article');
Route::get('/contato', [WebController::class, 'contact'])->name('contact');

Route::post('/send-mail', [WebController::class, 'sendMail'])->name('send-mail');

Route::get('/cms', [CmsController::class, 'index'])->name('cms.index');
Route::get('/cms/create', [CmsController::class, 'create'])->name('cms.create');
Route::post('/cms/store', [CmsController::class, 'store'])->name('cms.store');
Route::get('/cms/index', [CmsController::class, 'index'])->name('cms.index');
Route::put('/cms/{id}', [CmsController::class, 'update'])->name('cms.update');
Route::get('/cms/{id}/edit', [CmsController::class, 'edit'])->name('cms.edit');
Route::get('/cms/{id}/show', [CmsController::class, 'show'])->name('cms.show');
Route::delete('/cms/{id}/delete', [CmsController::class, 'delete'])->name('cms.delete');

