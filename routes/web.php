<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Response;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/download', function () {
    $file_name = public_path() . '/storage/donwload/my-cv.pdf';
    $file = File::get($file_name);
    $response = Response::make($file, 200);
    $response->header('Content-Type', 'application/pdf');
    return Response::download($file_name, 'my-cv.pdf');
})->name('download');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
