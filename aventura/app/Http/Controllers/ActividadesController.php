<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Actividad;
use App\ImageActividad;
use App\User;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use FCM;
use Image;
use File;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actividades = Actividad::orderBy('id','DESC')->paginate(20);
        $actividades->each(function($actividades){
            $actividades->category;
            $actividades->user;
        });
        //dd($actividades);
        return view('admin.articles.index')->with('actividades',$actividades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //dd("todo ok");
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        //dd($categories);
        return view('admin.articles.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $actividad = new Actividad($request->all());
        $actividad->user_id = \Auth::user()->id;
        $actividad->precioPublico = $request->precioPublico - (($request->precioPublico*$request->descuento)/100);
        $actividad->save();
        $ratio = 0;

        if($request->file('image')){

            $originalImage= $request->file('image');

            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/actividades/thumbnail/';
            $originalPath = public_path().'/images/actividades/';
            $name = 'actividad_'.$actividad->slug.'_'.time().$originalImage->getClientOriginalName();
            $thumbnailImage->save($originalPath.$name);
            // $thumbnailImage->resize(150,150);
            // prevent possible upsizing
            $imgSize=getimagesize($originalImage);
            $imgWidth = $imgSize['0'];
            $imgheight = $imgSize['1'];
            //verificar el cateto menor
            if($imgWidth < $imgheight){
              $ratio = (int) round(($imgWidth-1));
            }elseif($imgWidth > $imgheight){
              $ratio = (int) round(($imgheight-1));
            }elseif($imgWidth == $imgheight){
              $ratio = (int) round(($imgWidth-1));
            }
            $px = (int) round(($imgWidth/2)-($ratio/2));
            $py = (int) round(($imgheight/2)-($ratio/2));
            $thumbnailImage->crop($ratio,$ratio,$px,$py);
            $thumbnailImage->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            // $thumbnailImage->resize(null, 200, function ($constraint) {
            //     $constraint->aspectRatio();
            //     // $constraint->upsize();
            // });
            $thumbnailImage->save($thumbnailPath.$name);

        }
        //17:28

        

        $image = new ImageActividad();
        $image->foto = $name;
        $image->actividad()->associate($actividad);
        $image->save();
        flash('Se creado la actividad ' . $actividad->title)->success();
        return redirect()->route('actividades.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($slugString)
    {
        //
        $actividad = Actividad::findBySlug($slugString);
        $image = DB::table('images')->where('actividad_id',$actividad->id)->value('foto');        

        return view('admin.articles.show')->with('actividad',$actividad)->with('image',$image);
    }

    public function post($id){
        $article = Actividad::find($id);
        $article->state = '1';
        $article->save();
        flash('Se a publicado el articulo: ' . $article->title)->success();
        return redirect()->route('actividades.index');
    }

    public function undpost($id){
        $article = Actividad::find($id);
        $article->state = '0';
        $article->save();
        flash('Se a despublicado el articulo: ' . $article->title)->error();
        return redirect()->route('actividades.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slugString)
    {
        $actividad = Actividad::findBySlug($slugString);
        $image = DB::table('images')->where('actividad_id',$actividad->id)->value('foto');
        $actividad->category;
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        return view('admin.articles.edit')->with('categories',$categories)->with('actividad',$actividad)->with('image',$image);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $actividad = Actividad::find($id);
        $actividad->fill($request->all());
        $actividad->precioPublico = $request->precioPublico - (($request->precioPublico*$request->descuento)/100);
        $actividad->save();
        flash('Se a editado la actividad ' . $actividad->title)->success();
        return redirect()->route('actividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slugString)
    {
        //
        $actividad = Actividad::findBySlug($slugString);
        $thumbnailPath = public_path().'/images/actividades/thumbnail/';
        $originalPath = public_path().'/images/actividades/';
        //dd($product->image->foto);
        File::delete($thumbnailPath.$actividad->image->foto);
        File::delete($originalPath.$actividad->image->foto); 

        $actividad->delete();
        flash('Se a eliminado la Actividad ' . $actividad->title)->error();
        return redirect()->route('actividades.index');
    }

    public function ImagesUpdate(Request $request){
        $actividad = Actividad::find($request->actividad_id);
        $imageD = Image::where('actividad_id',$request->actividad_id)->first();
        //
        if ($imageD == null) {
            if($request->file('image')){
                $file = $request->file('image');
                $name = 'actividad_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/images/actividades/';
                $file->move($path,$name);
            }
            $actividad->save();
            $image = new Image();
            $image->foto = $name;
            $image->actividad()->associate($actividad);
                    
            $image->save();
            # code...
        } else {                    
            $path = public_path() . '/images/actividades/';
            if (file_exists($path.$imageD->foto)) {
                $imageD->delete(); 
                File::delete($path.$imageD->foto);                if($request->file('image')){
                    $file = $request->file('image');
                    $name = 'actividad_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/images/actividades/';
                    $file->move($path,$name);
                }
                $actividad->save();
                $image = new Image();
                $image->foto = $name;
                $image->actividad()->associate($actividad);
                        
                $image->save();
            } else {
                //dd("sin imagen, sin archivo");
                $path = public_path() . '/images/actividades/';
                File::delete($path.$imageD->foto);
                if($request->file('image')){
                    $file = $request->file('image');
                    $name = 'actividad_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/images/actividades/';
                    $file->move($path,$name);
                }                
                $actividad->save();
                $image = new Image();
                $image->foto = $name;
                $image->actividad()->associate($actividad);
                        
                $image->save();
            }
        }
        

        //dd($image);
        flash('Se a cambiado la imagen de portada de la actividad ' . $actividad->title)->success();
        return redirect()->route('actividades.show',$actividad->id);
        
    }

    public function eliminarVarios(Request $request){
        $val=$request->act;
        $myCheckboxes = $request->input('box');

        if ($myCheckboxes == null) {            
            return redirect()->route('articles.index');
        } else {
            if ($val == '0') {

               foreach ($myCheckboxes as $b) {
                   # code...
                $actividad = Actividad::find($b);
                $this->destroy($actividad->slug);
               }
               return redirect()->route('actividades.index');
            } elseif ($val == '1') {
                foreach ($myCheckboxes as $b) {
                   # code...
                $article = Actividad::find($b);
                $article->state = '1';
                $article->save();
               }
               return redirect()->route('actividades.index');
                
            } elseif ($val == '2') {
                foreach ($myCheckboxes as $b) {
                   # code...
                $article = Actividad::find($b);
                $article->state = '0';
                $article->save();
               }
               return redirect()->route('actividades.index');
                
            }
            
        }
    }

    public function search(Request $request){
        $posts = Actividad::where('title', 'LIKE', '%'.$request->search.'%')->get();
        return \response()->json($posts);
    }
}