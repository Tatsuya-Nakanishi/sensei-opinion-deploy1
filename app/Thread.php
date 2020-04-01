<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'category_id' => 'required',
        'body' => 'required',
    );
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
