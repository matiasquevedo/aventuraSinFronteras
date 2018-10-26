<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Actividad;
use App\Image;
use App\User; 
use App\Proveedor;
use App\Paquete;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    //

    public function index(){

    	$actividades = DB::table('actividadespostview')->get();
    	//dd($actividades);
        $paquetes = Paquete::all()->where('state',1);
        //dd("funciona el home");
        return view('home')->with('actividades',$actividades)->with('paquetes',$paquetes);
    }

    public function actividadPublic($actividad){
        $actividad = Actividad::find($actividad);
        $image = DB::table('images')->where('actividad_id',$actividad->id)->value('foto');
        return view('public.actividad')->with("actividad",$actividad)->with('image',$image);
    }

}
