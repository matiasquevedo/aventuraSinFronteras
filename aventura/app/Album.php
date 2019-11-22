<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;



class Album extends Model
{
    //
    use Sluggable,SluggableScopeHelpers;
    protected $table = "albumes";

    protected $fillable = ['titulo','descripcion','portada','user_id'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function fotos(){
    	return $this->hasMany('App\Image');
    }
}
