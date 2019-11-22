<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Foto;
use Image;
use File;
use Illuminate\Support\Facades\DB;

class AlbumesController extends Controller
{
    //
    /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
       public function index()
       {
           //
           $albumes = Album::orderBy('id','DESC')->paginate(30);
           $albumes->each(function($albumes){
               $albumes->user;
           });
           return view('admin.albumes.index')->with('albumes',$albumes);;
       }

       /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
       public function create()
       {
           //
           return view('admin.albumes.create');
       }

       /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
       public function store(Request $request)
       {

          $album = new Album($request->all());
          $album->user_id = \Auth::user()->id;
          $album->portada = '';
          $album->save();
           //

           // if($request->file('image')){
           //     $file = $request->file('image');
           //     $name = time() . '.' . $file->getClientOriginalExtension();
           //     $path = public_path() . '/fotos/albumes/';
           //     $file->move($path,$name);
           // }

           if($request->file('image')){
               $originalImage= $request->file('image');
               $thumbnailImage = Image::make($originalImage);
               $thumbnailPath = public_path().'/images/album/portada/thumbnail/';
               $originalPath = public_path().'/images/album/portada/';
               $name = 'album_'.$album->slug.'_'.'portada'.time().$originalImage->getClientOriginalName();
               $thumbnailImage->save($originalPath.$name);
               // $thumbnailImage->resize(150,150);
               // prevent possible upsizing
               $thumbnailImage->crop(200,200,100,50);
               // $thumbnailImage->resize(null, 200, function ($constraint) {
               //     $constraint->aspectRatio();
               //     // $constraint->upsize();
               // });
               $thumbnailImage->save($thumbnailPath.$name);
           }

           $album->portada = $name;        
           $album->save();

           flash('Se creado el articulo ' . $album->titulo)->success();
           return redirect()->route('albumes.index');
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
           $album = Album::findBySlug($slugString);
           $fotos = DB::table('fotos')->where('album_id','LIKE',"%$album->id%")->get();
           //dd($fotos);
           return view('admin.albumes.show')->with('album',$album)->with('fotos',$fotos);
       }

       /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
       public function edit($id)
       {
           //
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
           //
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
           $album = Album::findBySlug($slugString);
           $thumbnailPath = public_path().'/images/album/portada/thumbnail/';
           $originalPath = public_path().'/images/album/portada/';
           //dd($product->image->foto);
           File::delete($thumbnailPath.$album->portada);
           File::delete($originalPath.$album->portada);
           //dd($album->titulo);
           flash('Se a eliminado el albumn' . $album->titulo . ' de forma exitosa')->error();
           $album->delete();
           return redirect()->route('albumes.index');
       }


       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////
       ////////////////////////API///////////////////////////////////////

       public function ApiIndex(){
           $albumes = Album::orderBy('id','DESC')->get();
           $json = json_decode($albumes,true);
           return response()->json(array('result'=>$json));
       }

       public function ApiShow($id){
           $fotos = DB::table('fotos')->where('album_id','LIKE',"%$id%")->get();
           $json = json_decode($fotos,true);
           return response()->json(array('result'=>$json));
       }
}
