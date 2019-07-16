<?php

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

use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\Finder;

Route::get('/', function () {
    $files = Finder::create()
        ->in(app_path())
        ->name('*.txt')
        ->contains('hello');

    foreach ($files as $file) {
        $contents = File::get($file->getRealPath());

        $helloWord = str_replace('hello', 'Hello Word!', $contents);

        File::put($file->getRealPath(), $helloWord);

    }
});
