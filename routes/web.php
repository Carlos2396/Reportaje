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

Route::get('/', function () {
    $s = config('enums.chapters');
    $chapters = json_decode($s);

    return view('index', compact('chapters'));
})->name('index');

Route::get('/capitulos/{id}', function ($id) {
    $s = config('enums.chapters');
    $chapters = json_decode($s);

    $s = config('enums.infos');
    $infos = json_decode($s);

    if($id < 0 || $id > sizeof($chapters)) return redirect(route('index'));

    $next = $prev = null;
    $current = $chapters[$id];

    if($id - 1 >= 0) $prev = $chapters[$id-1];
    if($id + 1 < sizeof($chapters)) $next = $chapters[$id+1];

    return view('posts/'.$current->view, compact('chapters', 'current', 'next', 'prev', 'infos'));
})->name('chapter');

Route::get('/informacion/{id}', function ($id) {
    $s = config('enums.chapters');
    $chapters = json_decode($s);

    $s = config('enums.infos');
    $infos = json_decode($s);

    if($id < 0 || $id > sizeof($infos)) return redirect(route('index'));
    
    $next = $prev = null;
    $current = $infos[$id];

    if($id - 1 >= 0) $prev = $infos[$id-1];
    if($id + 1 < sizeof($infos)) $next = $infos[$id+1];

    return view('more/'.$current->view, compact('chapters', 'current', 'next', 'prev'));
})->name('info');