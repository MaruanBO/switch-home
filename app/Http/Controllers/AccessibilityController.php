<?php

namespace App\Http\Controllers;

use App\Accesibility;
use Illuminate\Http\Request;

class AccessibilityController extends Controller
{
    public function On(Request $request)
    {

        $accesibility = Accesibility::find(1);

        switch ($request->input('action')) {

            case 'voz':

                $accesibility->reconocimiento_voz = true;

                $accesibility->increment('view_count', -1);

                $accesibility->save();

                return redirect('accesibilidad')->with('success', 'Reconocimiento de voz encendido');

                break;

            case 'iris':

                $accesibility->equipo_iris = true;

                $accesibility->increment('view_count', -1);

                $accesibility->save();
                
                return redirect('accesibilidad')->with('success', 'Equipo de iris encendido');

                break;

            case 'interfaz':

                $accesibility->interfaz_inal = true;

                $accesibility->increment('view_count', -1);

                $accesibility->save();
                
                return redirect('accesibilidad')->with('success', 'Interfaz inalambrica encendida');

                break;

            case 'tel':

                $accesibility->telefono_visual = true;

                $accesibility->increment('view_count', -1);

                $accesibility->save();

                return redirect('accesibilidad')->with('success', 'Telefono visual encendido');

                break;
        }
    }

    public function Off(Request $request)
    {

        $accesibility = Accesibility::find(1);

        switch ($request->input('action')) {

            case 'voz':

                $accesibility->reconocimiento_voz = false;

                $accesibility->increment('view_count', 1);

                $accesibility->save();

                return redirect('accesibilidad')->with('warning', 'Reconocimiento de voz apagado');

                break;

            case 'iris':

                $accesibility->equipo_iris = false;

                $accesibility->increment('view_count', 1);

                $accesibility->save();

                return redirect('accesibilidad')->with('warning', 'Equipo de iris apagado');

                break;

            case 'interfaz':

                $accesibility->interfaz_inal = false;

                $accesibility->increment('view_count', 1);

                $accesibility->save();

                return redirect('accesibilidad')->with('warning', 'Interfaz inalambrica apagada');

                break;

            case 'tel':

                $accesibility->telefono_visual = false;

                $accesibility->increment('view_count', 1);

                $accesibility->save();

                return redirect('accesibilidad')->with('warning', 'Telefono visual apagado');

                break;
        }
    }

}
