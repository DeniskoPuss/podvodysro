<?php

use App\Models\Message;
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

Route::get('/', function () {
    return view('welcome', [
        'messages' => Message::orderBy('created_at', 'desc')->paginate(),
    ]);
})->name('index');

Route::post('/', function (\Illuminate\Http\Request $request) {
    Message::create(['text' => $request->text]);
    return redirect()->back();
});

Route::delete('/messages', [\App\Http\Controllers\MessageController::class, 'destroy'])
->name('messages.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
