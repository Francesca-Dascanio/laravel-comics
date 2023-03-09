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

    $comics = config('comics');

    return view('welcome', [
        'comics' => $comics,
        'menu' => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Collectibles',
            'Videos',
            'Fans',
            'News',
        ],
        'footerComics' => [
            'CHARACTERS',
            'COMICS',
            'MOVIES',
            'TV',
            'GAMES',
            'COLLECTIBLES',
            'VIDEOS',
            'FANS',
            'NEWS'
        ],
        'footerShop' => [
            'Shop DC',
            'Shop DC Collectibles'
        ],
        'footerDC' => [
            'Terms of Use',
            'Privacy Policy',
            'Ad Choice',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Worskshop',
            'Ratings',
            'Shop Help',
            'COntact Us'
        ],
        'footerSites' => [
            'DC',
            'MAD  Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ]
    ]);
});


