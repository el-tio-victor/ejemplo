<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table='works';
    protected $fillable=['title','detail','services'];

    public function images(){
        return $this->hasMany('App\Image');
    }
}
