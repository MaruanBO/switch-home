<?php

namespace App\Http\Controllers;

use App\Security;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function On(Request $request)
    {
        $security = Security::find(1);

        switch ($request->input('action')) {

            case 'camara':

                $security->camara = true;

                $security->increment('view_count', -1);
                
                $security->save();

                return redirect('seguridad')->with('success', 'Cámara encendida');

                break;

            case 'alarma':

                $security->alarma = true;

                $security->increment('view_count', -1);

                $security->save();

                return redirect('seguridad')->with('success', 'Alarma encendida');

                break;

            case 'gas':

                $security->fugas_gas = true;

                $security->increment('view_count', -1);

                $security->save();

                return redirect('seguridad')->with('success', 'Sistema anti-fugas de gas encendido');

                break;

            case 'presencia':

                $security->simulacion_prese = true;

                $security->increment('view_count', -1);

                $security->save();

                return redirect('seguridad')->with('success', 'Simulacion de presencia encendido');

                break;

            case 'vigilancia':

                $security->vigilancia_auto = true;

                $security->increment('view_count', -1);

                $security->save();

                return redirect('seguridad')->with('success', 'Vigilancia automatica encendida');

                break;

            case 'remoto':

                $security->control_rem = true;

                $security->increment('view_count', -1);            

                $security->save();

                return redirect('seguridad')->with('success', 'Control remoto encendido');

                break;

            case 'incendios':

                $security->incendios = true;

                $security->increment('view_count', -1);

                $security->save();

                return redirect('seguridad')->with('success', 'Sistema anti-incendios encendido');

                break;

            case 'electricidad':

                $security->fallos_elec = true;

                $security->increment('view_count', -1);

                $security->save();

                return redirect('seguridad')->with('success', 'Sistma anti-fallos electricos encendido');

                break;
        }

    }

    public function Off(Request $request)
    {

        $security = Security::find(1);

        switch ($request->input('action')) {

            case 'gas':

                $security->fugas_gas = false;

                $security->increment('view_count', 1);

                $security->save();

                return redirect('seguridad')->with('warning', 'Sistema anti-fugas de gas apagado');

                break;

            case 'alarma':

                $security->alarma = false;

                $security->increment('view_count', 1);

                $security->save();

                return redirect('seguridad')->with('warning', 'Alarma apagada');

                break;

            case 'camara':

                $security->camara = false;

                $security->increment('view_count', 1);

                $security->save();

                return redirect('seguridad')->with('warning', 'Camara apagada');

                break;

            case 'presencia':

                $security->simulacion_prese = false;

                $security->increment('view_count', 1);

                $security->save();

                return redirect('seguridad')->with('warning', 'Simulacion de presencia apagada');

                break;

            case 'vigilancia':

                $security->vigilancia_auto = false;

                $security->increment('view_count', 1);

                $security->save();

                return redirect('seguridad')->with('warning', 'Vigilancia automatica apagada');

                break;

            case 'remoto':

                $security->control_rem = false;

                $security->increment('view_count', 1);

                $security->save();

                return redirect('seguridad')->with('warning', 'Control remoto apagado');

                break;

            case 'incendios':

                $security->incendios = false;

                $security->increment('view_count', 1);

                $security->save();

                return redirect('seguridad')->with('warning', 'Sistema anti-incendios apagado');

                break;

            case 'electricidad':

                $security->fallos_elec = false;

                $security->increment('view_count', 1);

                $security->save();

                return redirect('seguridad')->with('warning', 'Sistema anti-fallos electricos apagado');

                break;

        }
    }
}
