<?php

Route::namespace('Back')->group(function () {

    Route::get('/', 'Controller@index')->name('dashboard');

    Route::namespace('Product')->prefix('product')->group(function () {
        Route::get('/', 'Controller@index')->name('product');
        Route::get('/create', 'Controller@create')->name('product.create');
        Route::post('/store', 'Controller@store')->name('product.store');
        Route::get('/edit/{product}', 'Controller@edit')->name('product.edit');
        Route::post('/update', 'Controller@update')->name('product.update');
        Route::get('/delete/{product}', 'Controller@delete')->name('product.delete');
    });
    
     Route::namespace('About')->prefix('about')->group(function () {
        Route::get('/', 'Controller@index')->name('about');
        Route::put('/update', 'Controller@update')->name('about.update');
    });
    Route::namespace('Contact')->prefix('contact')->group(function () {
        Route::get('/', 'Controller@index')->name('contact');
        Route::put('/update', 'Controller@update')->name('contact.update');
    });
    Route::namespace('Setting')->prefix('setting')->group(function () {
        Route::get('/', 'Controller@index')->name('setting');
        Route::put('/update', 'Controller@update')->name('setting.update');
    });
    
    Route::get('/migrate', function() {
    //  Artisan::call('make:model Setting  -m');
    Artisan::call('migrate');
    // Artisan::call('make:seeder AboutsTableSeeder');
    // Artisan::call('migrate:fresh --seed');
   return "migrate!";

});


});
