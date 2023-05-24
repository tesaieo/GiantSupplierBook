<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/bookDetail/{bookId}',[MainController::class,'find'])->name('find');
Route::get('/publisher',[MainController::class,'publisher'])->name('publisher');
Route::get('/AllBooks/{publisherId}',[MainController::class,'publisherBooks'])->name('AllBooks');
Route::get('/category/{categoryId}',[MainController::class,'categoryBook'])->name('category');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Route::get('/test3/{id}',[TicketController::class,'detail'])->name('detail');
// Route::get('/contact',[TicketController::class,'contact'])->name('contact');