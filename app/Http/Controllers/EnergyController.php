<?php

namespace App\Http\Controllers;

use App\Energy;
use Illuminate\Http\Request;
use DB;
use Alert;

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

                Alert::success('Sistema de riego', 'Ahorro energetico en riego ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'clima':

                $energy->control_del_clima = true;

                $energy->increment('view_count', -1);

                $energy->save();

                Alert::success('Control de climatización ', 'Ahorro energetico en el control de climatización ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'agua':

                $energy->agua_caliente = true;

                $energy->increment('view_count', -1);

                $energy->save();

                Alert::success('Agua caliente', 'Ahorro energetico en agua caliente ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'electrodomesticos':

                $energy->electrodomesticos = true;

                $energy->increment('view_count', -1);

                $energy->save();

                Alert::success('Electrodomesticos', 'Ahorro energetico en electrodomesticos ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'sensor':

                $energy->sensor_de_movimiento = true;

                $energy->increment('view_count', -1);

                $energy->save();

                Alert::success('Sensores', 'Ahorro energetico en sensores ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'luz':

                $energy->control_de_luz = true;

                $energy->increment('view_count', -1);

                $energy->save();

                Alert::success('Luz', 'Ahorro energetico en las luces ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'tarifas':

                $energy->gestion_de_tarifas = true;

                $energy->increment('view_count', -1);

                $energy->save();

                Alert::success('Gestión de tarifas', 'El sistema de gestión de tarifas ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'persianas':

                $energy->persianas = true;

                $energy->increment('view_count', -1);

                $energy->save();

                Alert::success('Persianas', 'Ahorro energetico en persianas ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'salon':

                DB::table('luces')->update(['salon' => true]);

                Alert::success('Salón', 'La luz del salón ha sido encendida correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('/');

                break;

            case 'baño':

                DB::table('luces')->update(['baño' => true]);

                Alert::success('Baño', 'La luz del baño ha sido encendida correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('/');

                break;

            case 'habitacion':

                DB::table('luces')->update(['habitacion' => true]);

                Alert::success('Habitacion', 'La luz de la habitacion ha sido encendida correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('/');

                break;

            case 'cocina':

                DB::table('luces')->update(['cocina' => true]);

                Alert::success('Cocina', 'La luz de la cocina ha sido encendida correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('/');

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

                Alert::warning('Sistema de riego', 'Ahorro energetico en riego ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'clima':

                $energy->control_del_clima = false;

                $energy->increment('view_count', 1);

                $energy->save();

                Alert::warning('Control de climatización ', 'Ahorro energetico en el control de climatización ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'agua':

                $energy->agua_caliente = false;

                $energy->increment('view_count', 1);

                $energy->save();

                Alert::warning('Agua caliente', 'Ahorro energetico en agua caliente ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'electrodomesticos':

                $energy->electrodomesticos = false;

                $energy->increment('view_count', 1);

                $energy->save();

                Alert::warning('Electrodomesticos', 'Ahorro energetico en electrodomesticos ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'sensor':

                $energy->sensor_de_movimiento = false;

                $energy->increment('view_count', 1);

                $energy->save();

                 Alert::warning('Sensores', 'Ahorro energetico en sensores ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'luz':

                $energy->control_de_luz = false;

                $energy->increment('view_count', 1);

                $energy->save();

                Alert::warning('Luz', 'Ahorro energetico en las luces ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'tarifas':

                $energy->gestion_de_tarifas = false;

                $energy->increment('view_count', 1);

                $energy->save();

                Alert::warning('Gestión de tarifas', 'El sistema de gestión de tarifas ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'persianas':

                $energy->persianas = false;

                $energy->increment('view_count', 1);

                $energy->save();

                Alert::warning('Persianas', 'Ahorro energetico en persianas ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('energia');

                break;

            case 'salon':

                DB::table('luces')->update(['salon' => false]);

                Alert::warning('Salón', 'La luz del salón ha sido apagada correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('/');

                break;

            case 'baño':

                DB::table('luces')->update(['baño' => false]);

                Alert::warning('Baño', 'La luz del salón ha sido apagada correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('/');

                break;

            case 'habitacion':

                DB::table('luces')->update(['habitacion' => false]);

                Alert::warning('Habitacion', 'La luz de la habitacion ha sido apagada correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('/');

                break;

            case 'cocina':

                DB::table('luces')->update(['cocina' => false]);

                Alert::warning('Cocina', 'La luz de la cocina ha sido apagada correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('/');

                break;
        }

    }

}
