<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageActividad extends Model
{
    //
    protected $table = "images";

    protected $fillable = ['foto','actividad_id'];

    public function actividad(){
    	return $this->belongsTo('App\Actividad');
    }

}
