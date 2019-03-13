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
    $chapters = [
        [
            'title' => 'Introducción',
            'menu' => 'Introducción',
            'image' => asset('images/thumbs/featured/featured-watch.jpg')
        ],
        [
            'title' => 'Hasta que la muerte nos separe',
            'menu' => 'En pareja',
            'image' => asset('images/thumbs/featured/featured-beetle.jpg')
        ],
        [
            'title' => 'Acompañado',
            'menu' => 'En familia',
            'image' => asset('images/thumbs/featured/featured-watch.jpg')
        ],
        [
            'title' => 'Casa sola corazones distintos',
            'menu' => 'Independiente',
            'image' => asset('images/thumbs/featured/featured-beetle.jpg')
        ],
        [
            'title' => 'Sobre la soledad',
            'menu' => 'Epílogo',
            'image' => asset('images/thumbs/featured/featured-watch.jpg')
        ],
        [
            'title' => 'Conoce más',
            'menu' => 'Sobre adultos mayores',
            'image' => asset('images/thumbs/featured/featured-beetle.jpg')
        ]
    ];

    return view('index', compact('chapters'));
})->name('index');
