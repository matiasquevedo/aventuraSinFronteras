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
    	//$actividades = Actividad::where($matchThese)->get()->take(3)->inRandomOrder();
    	$actividades = DB::table('actividadespostview')->get();
    	//dd($actividades);
        $paquetes = Paquete::all()->where('state',1);
        //dd("funciona el home");
        return view('home')->with('actividades',$actividades);
    }

    public function actividadPublic($slugString){
        $actividad = Actividad::findBySlug($slugString);
        $image = DB::table('images')->where('actividad_id',$actividad->id)->value('foto');
        return view('public.actividad')->with("actividad",$actividad)->with('image',$image);
    }

    public function categoryPublic($slugString){
        $category = Category::findBySlug($slugString);
        $actividades = DB::table('categoryactividadespost')->where('category_id','=',$category->id)->get();
        return view('public.category')->with('category',$category)->with('actividades',$actividades);
    }

}
