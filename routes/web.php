<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
  'register' => true,
  'verify' => true,
]);

Route::group(['middleware' => ['auth', 'verified']], function () {

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

    Route::get('markAsRead', function(){

        $id = auth()->user()->unreadNotifications[0]->id;
        
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        
        return back();

    })->name('markAsRead');

    Route::get('markDelete', function(){
        
        $id = auth()->user()->unreadNotifications[0]->id;
        
        auth()->user()->notifications()
            ->where('id', $id)
            ->delete();

        return back();
        
    })->name('markDelete'); 

    Route::get('markAll', function(){

        auth()->user()->notifications()->update(['read_at' => now()]);

        return back();
        
    })->name('markAll');


    Route::get('markAllDelete', function(){
        
        auth()->user()->notifications()->delete();

        return back();

    })->name('markAllDelete');

});
