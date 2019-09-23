<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

Route::prefix('locale')->group(function () {
    Route::get('/', function () {
        return App::getLocale();
    });

    Route::get('/{locale}', function (string $locale) {
        Cookie::queue('locale', $locale, 10000000);
        Session::put('locale', $locale);

        return redirect()->back();
    });
});



Auth::routes();

Route::namespace('Front')->group(function () {
     Route::get('/', 'Controller@index')->name('index');
     Route::get('more/{slug}', 'Controller@more')->name('more');
     Route::get('success', 'Controller@success')->name('success');
     Route::get('about', 'Controller@about')->name('about.f');
     Route::get('contact', 'Controller@contact')->name('contact.f');

});



Route::get('/seed', function() {
    // Artisan::call('migrate:fresh --seed');
    // Artisan::call('make:seeder AboutsTableSeeder');
    //Artisan::call('make:model About -m');
    //Artisan::call('migrate');
    // Artisan::call('migrate:fresh');
    // Artisan::call('db:seed');
    // Artisan::call('cache:clear');
    return "seed!";

});