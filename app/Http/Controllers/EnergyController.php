<?php

namespace App\Http\Controllers;

use App\Energy;
use Illuminate\Http\Request;
use DB;

class EnergyController extends Controller
{
    public function On(Request $request)
    {

        $energy = Energy::find(1);

        switch ($request->input('action')) {

            case 'riego':

                $energy->riego = true;

                $energy->increment('view_count', -1);  

                $energy->save();

                return redirect('energia')->with('success', 'Ahorro energetico en riego encendido');

                break;

            case 'clima':

                $energy->control_del_clima = true;

                $energy->increment('view_count', -1);

                $energy->save();

                return redirect('energia')->with('success', 'Ahorro energetico en el clima encendido');

                break;

            case 'agua':

                $energy->agua_caliente = true;

                $energy->increment('view_count', -1);

                $energy->save();

                return redirect('energia')->with('success', 'Ahorro energetico en agua caliente encendido');

                break;

            case 'electrodomesticos':

                $energy->electrodomesticos = true;

                $energy->increment('view_count', -1);

                $energy->save();

                return redirect('energia')->with('success', 'Ahorro energetico en electrodomesticos encendido');

                break;

            case 'sensor':

                $energy->sensor_de_movimiento = true;

                $energy->increment('view_count', -1);

                $energy->save();

                return redirect('energia')->with('success', 'Ahorro energetico en sensores encendido');

                break;

            case 'luz':

                $energy->control_de_luz = true;

                $energy->increment('view_count', -1);

                $energy->save();

                return redirect('energia')->with('success', 'Ahorro energetico en luz encendido');

                break;

            case 'tarifas':

                $energy->gestion_de_tarifas = true;

                $energy->increment('view_count', -1);

                $energy->save();

                return redirect('energia')->with('success', 'Ahorro energetico en gestion de tarifas encendido');

                break;

            case 'persianas':

                $energy->persianas = true;

                $energy->increment('view_count', -1);

                $energy->save();

                return redirect('energia')->with('success', 'Ahorro energetico en persianas encendido');

                break;

            case 'salon':

                DB::table('luces')->update(['salon' => true]);

                return redirect('/')->with('success', 'Luz del salon encendida');

                break;

            case 'baño':

                DB::table('luces')->update(['baño' => true]);

                return redirect('/')->with('success', 'Luz del baño encendida');

                break;

            case 'habitacion':

                DB::table('luces')->update(['habitacion' => true]);

                return redirect('/')->with('success', 'Luz de la habitación encendida');

                break;

            case 'cocina':

                DB::table('luces')->update(['cocina' => true]);

                return redirect('/')->with('success', 'Luz de la cocina encendida');

                break;
        }
    }

    public function Off(Request $request)
    {

        $energy = Energy::find(1);

        switch ($request->input('action')) {

            case 'riego':

                $energy->riego = false;

                $energy->increment('view_count', 1);

                $energy->save();

                return redirect('energia')->with('warning', 'Ahorro energetico en riego apagado');

                break;

            case 'clima':

                $energy->control_del_clima = false;

                $energy->increment('view_count', 1);

                $energy->save();

                return redirect('energia')->with('warning', 'Ahorro energetico en control del clima apagado');

                break;

            case 'agua':

                $energy->agua_caliente = false;

                $energy->increment('view_count', 1);

                $energy->save();

                return redirect('energia')->with('warning', 'Ahorro energetico en agua caliente apagado');

                break;

            case 'electrodomesticos':

                $energy->electrodomesticos = false;

                $energy->increment('view_count', 1);

                $energy->save();

                return redirect('energia')->with('warning', 'Ahorro energetico en electrodomesticos apagado');

                break;

            case 'sensor':

                $energy->sensor_de_movimiento = false;

                $energy->increment('view_count', 1);

                $energy->save();

                return redirect('energia')->with('warning', 'Ahorro energetico en sensores apagado');

                break;

            case 'luz':

                $energy->control_de_luz = false;

                $energy->increment('view_count', 1);

                $energy->save();

                return redirect('energia')->with('warning', 'Ahorro energetico en luz');

                break;

            case 'tarifas':

                $energy->gestion_de_tarifas = false;

                $energy->increment('view_count', 1);

                $energy->save();

                return redirect('energia')->with('warning', 'Ahorro energetico en gestion de tarifas apagado');

                break;

            case 'persianas':

                $energy->persianas = false;

                $energy->increment('view_count', 1);

                $energy->save();

                return redirect('energia')->with('warning', 'Ahorro energetico en persianas apagado');

                break;

            case 'salon':

                DB::table('luces')->update(['salon' => false]);

                return redirect('/')->with('warning', 'Luz del salon apagada');

                break;

            case 'baño':

                DB::table('luces')->update(['baño' => false]);

                return redirect('/')->with('warning', 'Luz del baño apagada');

                break;

            case 'habitacion':

                DB::table('luces')->update(['habitacion' => false]);

                return redirect('/')->with('warning', 'Luz de la habitación apagada');

                break;

            case 'cocina':

                DB::table('luces')->update(['cocina' => false]);

                return redirect('/')->with('warning', 'Luz de la cocina apagada');

                break;
        }

    }

}
