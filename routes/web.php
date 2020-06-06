<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
  'register' => false,
  'verify' => true,
]);

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/demo', function () {
        return new App\Mail\CustomEmailVerify();
    });

    Route::get('/', 'DomoticaController@index')->name('home');

    Route::get('/hogar', 'DomoticaController@getHogar')->name('hogar');

    Route::get('/plano', 'DomoticaController@getPlano')->name('plano');

    Route::get('/energia', 'DomoticaController@getEnergia')->name('energia');

    Route::get('/accesibilidad', 'DomoticaController@getAccesibilidad')->name('accesibilidad');

    Route::get('/seguridad/', 'DomoticaController@getSeguridad')->name('seguridad');

    Route::get('/perfil', 'DomoticaController@getPerfil')->name('perfil');

    Route::post('/changePassword', 'DomoticaController@changePassword')->name('changePassword');

    Route::post('/sensorCode', 'DomoticaController@sensorCode')->name('sensorCode');

    Route::put('/energia/on', 'EnergyController@On')->name('energia.on');

    Route::put('/energia/off', 'EnergyController@Off')->name('energia.off');

    Route::put('/accesibilidad/on', 'AccessibilityController@On')->name('acces.on');

    Route::put('/accesibilidad/off', 'AccessibilityController@Off')->name('acces.off');

    Route::put('/seguridad/on', 'SecurityController@On')->name('sec.on');

    Route::put('/seguridad/off', 'SecurityController@Off')->name('sec.off');

    Route::get('/notify', 'PusherController@sendNotification');

    Route::get('search', 'SearchController@index')->name('search');
    
    Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');

    Route::get('maskAsRead', function(){

        $id = auth()->user()->unreadNotifications[0]->id;
        
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        
        return back();

    })->name('maskAsRead');

    Route::get('maskDelete', function(){
        
        $id = auth()->user()->unreadNotifications[0]->id;
        
        auth()->user()->notifications()
            ->where('id', $id)
            ->delete();

        return back();
    })->name('maskDelete'); 

    Route::get('maskAll', function(){

        auth()->user()->notifications()->update(['read_at' => now()]);

        return back();
        
    })->name('maskAll');


    Route::get('maskAllDelete', function(){
        
        auth()->user()->notifications()->delete();

        return back();

    })->name('maskAllDelete');

});
