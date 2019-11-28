<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Actividad extends Model
{
    use Sluggable,SluggableScopeHelpers;
    protected $table = "actividades";

    protected $fillable = ['id','title','volanta','duracion','largo','descripcion','category_id','user_id','recomendacion','proveedor_id','precioPublico','precioProveedor','descuento','slug'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function image(){
    	return $this->hasOne('App\Image');
    }

    public function items(){
        return $this->hasMany('App\Item');
    }

    public function actividadPaquete(){
        return $this->hasMany('App\ActividadPaquete');
    }

    public function scopePost($query){
        return $query->where('state',1);
    }
}
