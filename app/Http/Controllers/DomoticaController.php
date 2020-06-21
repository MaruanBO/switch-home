<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;

use App\User;
use App\Security;
use App\Energy;
use App\Accesibility;
use App\House;
use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;
use App\Notifications\IntrunderAlert;
use App\Notifications\EmailNotification;
use App\Http\Requests\UpdateProfile;
use App\Http\Requests\PincodeCheck;


class DomoticaController extends Controller
{
    public function index()
    {

        $security = Security::first();

        $access = Accesibility::first();

        $luz = DB::table('luces')->get()->first();

        $accident = DB::table('incidente')->get()->first();

        $energy = Energy::first();

        $accidentLoop = DB::table('incidente')->get();

 
        /**if ($accident->componente_afec == 'Camara' or $accident->componente_afec == 'Sensor') {
           
            $when = now()->addSeconds(1);

            $userAuth = Auth::user();

            $userAuth->notify(new EmailNotification($userAuth));

            $userAuth->notify((new IntrunderAlert())->delay($when));

        }**/

        return view('home', compact('security', 'access', 'luz', 'accident', 'energy','accidentLoop'));

    }

    public function getHogar()
    {

        $hogar = House::first();

        return view('domotica.hogar', compact('hogar'));
    }

    public function getPlano()
    {

        return view('domotica.plano');
    }

    public function getEnergia()
    {
        $energy = Energy::first();

        return view('domotica.energia', compact('energy'));
    }

    public function getAccesibilidad()
    {
        $acces = Accesibility::first();

        return view('domotica.accesibilidad', compact('acces'));
    }

    public function getSeguridad()
    {

        $security = Security::first();

        return view('domotica.seguridad', compact('security'));
    }

    public function getPerfil()
    {
        $perfil = DB::table('hogar')->get()->first();

        return view('domotica.perfil', compact('perfil'));
    }

    public function changePassword(UpdateProfile $request )
    {

        $data = $request->all();

        $user = User::find(auth()->user()->id);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->password)]);

        return redirect()->back()->with("success", "La contraseña ha sido modificada con exito !");
              
    }

        public function sensorCode(PincodeCheck $request )
        {

            return response()->json(['success'=>'Activado correctamente!.']);
              
        }
}
