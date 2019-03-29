<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Category extends Model
{
	use Sluggable,SluggableScopeHelpers;
    protected $table = "categories";

    protected $fillable = ['name'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function actividades(){
    	return $this->hasMany('App\Actividad');
    }

    public function informaciones(){
        return $this->hasMany('App\Informacion');
    }
}
