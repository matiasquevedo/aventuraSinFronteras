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

    	$matchThese = ['state'=>'1'];
    	$categories = Category::all();
    	//dd($categories);
    	$actividades = Actividad::where('state','1')->get();
    	// $actividades = DB::table('actividadespostview')->get();
    	// dd($actividades);
        $paquetes = Paquete::all()->where('state','1');
        //dd("funciona el home");
        return view('home')->with('actividades',$actividades);
    }

    public function actividadPublic($slugString){
        $actividad = Actividad::findBySlug($slugString);
        return view('public.actividad')->with("actividad",$actividad);
    }

    public function categoryPublic($slugString){
        $category = Category::findBySlug($slugString);
        $actividades = Actividad::where('category_id','=',$category->id)->where('state','1')->get();
        // dd($actividades);
        return view('public.category')->with('category',$category)->with('actividades',$actividades);
    }

}
