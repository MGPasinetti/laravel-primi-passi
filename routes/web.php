<?php

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
    $params = [
        'links' => [
            'Home',
            'About us',
            'Feature',
            'Testimonials',
            'Contact US'
        ]
    ];
    return view('home', $params);
})->name('navbar');

Route::get('/', function () {
    $params = [
        'vegetables' => [
            [
                'name' => 'Melanzana',
                'colors' => ['viola', 'bianco'],
                'medium_weight' => '350g',
            ],
            [
                'name' => 'Zucchina',
                'colors' => ['verde', 'giallo'],
                'medium_weight' => '200g',
            ],
            [
                'name' => 'Pomodoro',
                'colors' => ['rosso', 'verde'],
                'medium_weight' => '90g',
            ],
            [
                'name' => 'Zucca',
                'colors' => ['arancione'],
                'medium_weight' => '1500g',
            ],
            [
                'name' => 'Cavolo cappuccio',
                'colors' => ['verde', 'viola'],
                'medium_weight' => '1500g',
            ],
        ]
    ];
    return view('home', $params);
})->name('homepage');


/*
A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()
*/









