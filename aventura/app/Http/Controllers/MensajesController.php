<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;
use App\Http\Requests\MensajeRequest;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mensajes = Mensaje::orderBy('id','DESC')->paginate(20);
        //dd($mensajes);
        return view('admin.mensajes.index')->with('mensajes',$mensajes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MensajeRequest $request)
    {
        //dd($request);
        dd($validated = $request->validated());
        $mensaje = new Mensaje($request->all());
        $mensaje->save();
        flash('Se a enviado su mensaje, en breve le contestaremos.')->success();
        return redirect()->route('principal');
    }

    public function sendPublicMsn(Request $request){
        $r = $this->validate($request, [
            'g-recaptcha-response' => 'required|captcha'
        ]);
        // dd($request);
        $mensaje = new Mensaje($request->all());
        $mensaje->save();
        flash('Se a enviado su mensaje, en breve le contestaremos.')->success();
        return redirect()->route('principal');
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
        $mensaje = Mensaje::find($id);
        $mensaje->state = '1';
        $mensaje->save();
        return view('admin.mensajes.show')->with('mensaje',$mensaje);
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
        $mensaje = Mensaje::find($id);
        flash('Se a eliminado el mensaje de: ' . $mensaje->nombre. ' ' .$mensaje->apellido)->error();
        $mensaje->delete();
        return redirect()->route('mensajes.index');
    }
}
