<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
  protected $fillable = [
  'name', 'email', 'password','age','job','school'
  ];
    
  public static $rules = array(
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'age' => 'required',
      'job' => 'required',
      'school' => 'required',
  );

  public static $updaterules = array(
      'name' => 'required',
      'email' => 'required',
      'age' => 'required',
      'job' => 'required',
      'school' => 'required',
  );
  public function threads(){
    return $this->hasMany('App\Threads')->latest();
  }
  
  public function comments(){
    return $this->hasMany('App\Comments');
  }
}
