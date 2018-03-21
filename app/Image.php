<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable=['name'];

    public function articles(){
        return $this->belongsToMany('App\Article')->withTimeStamps();
    }

    public function work(){
        return $this->belongsTo('App\Work');
    }
}
