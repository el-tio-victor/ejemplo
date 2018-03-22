<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Work extends Model
{
    
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table='works';
    protected $fillable=['title','detail','services'];

    public function images(){
        return $this->belongsToMany('App\Image','work_image');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
