<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Album;
use Image;
use File;

class FotosController extends Controller
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
       }

       /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
       public function create()
       {
           //
           return view('admin.fotos.create');
       }

       /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
       public function store(Request $request)
       {
           //        dd($request);
           \Log::info('llego');
           $path = public_path().'/fotos/albumes/fotos';
           $thumbnailPath = public_path().'/images/album/fotos/thumbnail/';
           $originalPath = public_path().'/images/album/fotos/';
           $album = Album::find($request->album_id);
           $ratio = 0;
           // dd($album);
           $files=$request->file('images');
           if($files){
            foreach($files as $file){
                $originalImage= $file;
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
                // dd($px,$py,$ratio);
                $thumbnailImage = Image::make($originalImage);
                $name = 'foto_'.$album->slug.'_'.time().$originalImage->getClientOriginalName();
                $thumbnailImage->save($originalPath.$name);
                $thumbnailImage->crop($ratio,$ratio,$px,$py);
                $thumbnailImage->resize(200, 200, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $thumbnailImage->save($thumbnailPath.$name);
                $foto = new Foto();
                $foto->foto = $name;
                $foto->album_id = $album->id;
                \Log::info('foto agregada al album');
                $foto->save();
            }
           }else{
              flash("No se han seleccionado fotos")->error();
              return redirect()->route('albumes.show',$album->slug);
           }
           
           flash("Se han agregado imagenes")->success();
           return redirect()->route('albumes.show',$album->slug);
       }

       public function eliminarVarios(Request $request){
            $myCheckboxes = $request->input('box');
            
            $album = $request->albumSlug;
            $thumbnailPath = public_path().'/images/album/fotos/thumbnail/';
            $originalPath = public_path().'/images/album/fotos/';
            if ($myCheckboxes == null) {            
                flash("Seleccione fotos para eliminar")->info();
                return redirect()->route('albumes.show', $album);
            } else {
                $cantidad = count($myCheckboxes);
                foreach ($myCheckboxes as $b) {
                    $foto = Foto::find($b);
                    //dd($product->image->foto);
                    File::delete($thumbnailPath.$foto->foto);
                    File::delete($originalPath.$foto->foto);
                    $foto->delete();
                }
                flash("Se han eliminado ".$cantidad." fotos")->error();
                return redirect()->route('albumes.show', $album);                
            }
       }


       /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
       public function show($id)
       {
           //
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
       public function destroy($id)
       {
           //
       }
}
