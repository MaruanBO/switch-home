<?php

namespace App\Http\Controllers;

use App\Security;
use Illuminate\Http\Request;
use Alert;

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

                Alert::success('Camara', 'El sistema de camaras ha sido encendida correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'alarma':

                $security->alarma = true;

                $security->increment('view_count', -1);

                $security->save();

                Alert::success('Alarma', 'El sistema de alarmas ha sido encendida correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'gas':

                $security->fugas_gas = true;

                $security->increment('view_count', -1);

                $security->save();

                Alert::success('Anti-fugas de gas', 'El Sistema anti-fugas de gas ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad')->with('success', 'Sistema anti-fugas de gas encendido');

                break;

            case 'presencia':

                $security->simulacion_prese = true;

                $security->increment('view_count', -1);

                $security->save();

                Alert::success('Simulador de presencia', 'El Sistema de simulación de presencia ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'vigilancia':

                $security->vigilancia_auto = true;

                $security->increment('view_count', -1);

                $security->save();

                Alert::success('Vigilancia automática', 'El Sistema de vigilancia automática ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'remoto':

                $security->control_rem = true;

                $security->increment('view_count', -1);            

                $security->save();

                Alert::success('Control remoto', 'El Sistema de control remoto ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');                
                return redirect('seguridad');

                break;

            case 'incendios':

                $security->incendios = true;

                $security->increment('view_count', -1);

                $security->save();

                Alert::success('Anti-incendios', 'El Sistema anti-incendios ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'electricidad':

                $security->fallos_elec = true;

                $security->increment('view_count', -1);

                $security->save();

                Alert::success('Anti-fallos de electricidad', 'El Sistema anti-fallos de electricidad ha sido encendido correctamente')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

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

                Alert::warning('Anti-fugas de gas', 'El Sistema anti-fugas de gas ha sido apagado correctamente, para su propia seguridad enciendalo')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'alarma':

                $security->alarma = false;

                $security->increment('view_count', 1);

                $security->save();

                Alert::warning('Sistema de alarmas', 'El Sistema de alarmas sido apagado correctamente, para su propia seguridad enciendalo')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'camara':

                $security->camara = false;

                $security->increment('view_count', 1);

                $security->save();

                Alert::warning('Sistema de camaras', 'El sistema de camaras ha sido apagado correctamente, para su seguridad enciendalo')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'presencia':

                $security->simulacion_prese = false;

                $security->increment('view_count', 1);

                $security->save();

                Alert::warning('Simulacón de presencia', 'El sistema de simulación de presencia ha sido apagado correctamente, para su seguridad fisica inminente enciendalo')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'vigilancia':

                $security->vigilancia_auto = false;

                $security->increment('view_count', 1);

                $security->save();

                Alert::warning('Vigilancia automàtica', 'El sistema de vigilancia automàtica ha sido apagado correctamente, para su seguridad enciendalo')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'remoto':

                $security->control_rem = false;

                $security->increment('view_count', 1);

                $security->save();

                Alert::warning('Control remoto', 'El sistema de control remoto ha sido apagado correctamente, para su seguridad enciendalo')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'incendios':

                $security->incendios = false;

                $security->increment('view_count', 1);

                $security->save();

                Alert::warning('Anti-incendios', 'El sistema anti-incendios ha sido apagado correctamente, para su seguridad enciendalo')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

            case 'electricidad':

                $security->fallos_elec = false;

                $security->increment('view_count', 1);

                $security->save();

                Alert::warning('Anti-fallos de electricidad', 'El sistema anti-fallos de electricidad ha sido apagado correctamente, para su seguridad enciendalo')->showConfirmButton('Aceptar', '#5900de');

                return redirect('seguridad');

                break;

        }
    }
}
