<?php

namespace App\Http\Controllers;

use App\Accesibility;
use Illuminate\Http\Request;
use Alert;

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

                Alert::success('Reconocimiento de voz', 'El sistema de reconocimiento de voz ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('accesibilidad');

                break;

            case 'iris':

                $accesibility->equipo_iris = true;

                $accesibility->increment('view_count', -1);

                $accesibility->save();
                
                Alert::success('Equipo de iris', 'El equipo de iris de voz ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('accesibilidad');

                break;

            case 'interfaz':

                $accesibility->interfaz_inal = true;

                $accesibility->increment('view_count', -1);

                $accesibility->save();

                Alert::success('Interfaz inalambrica', 'El sistema de interfaz inalambrica ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');
                
                return redirect('accesibilidad');

                break;

            case 'tel':

                $accesibility->telefono_visual = true;

                $accesibility->increment('view_count', -1);

                $accesibility->save();

                Alert::success('Telefono visual', 'El sistema telefono visual de voz ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('accesibilidad');

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

                Alert::warning('Reconocimiento de voz', 'El sistema de reconocimiento de voz ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('accesibilidad');

                break;

            case 'iris':

                $accesibility->equipo_iris = false;

                $accesibility->increment('view_count', 1);

                $accesibility->save();

                Alert::warning('Equipo de iris', 'El equipo de iris de voz ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('accesibilidad');

                break;

            case 'interfaz':

                $accesibility->interfaz_inal = false;

                $accesibility->increment('view_count', 1);

                $accesibility->save();

                Alert::warning('Interfaz inalambrica', 'El sistema de interfaz inalambrica ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('accesibilidad')->with('warning', 'Interfaz inalambrica apagada');

                break;

            case 'tel':

                $accesibility->telefono_visual = false;

                $accesibility->increment('view_count', 1);

                $accesibility->save();

                Alert::warning('Teefono visual', 'El sistema telefono visual de voz ha sido apagado correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('accesibilidad');

                break;
        }
    }

}
