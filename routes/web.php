<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('contacts.index');
})->name('home');

Route::prefix('contacts')->group(function () {
    Route::get('list', [ContactController::class, 'list'])->name('contacts-list');
    Route::get('create', [ContactController::class, 'create'])->name('contacts-create');
    Route::post('import-xml', [ContactController::class, 'importXML'])->name('contacts-import-xml');
    Route::delete('delete/{id?}', [ContactController::class, 'delete'])->name('contacts-delete');
});
