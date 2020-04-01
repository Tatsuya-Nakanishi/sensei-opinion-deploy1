<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\User;

use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
  public function add() {
    return view('user.register');
  }
  
  public function postadd(Request $request) {
    $this->validate($request,[
      'name' => 'required',
      'email' => 'email|required|unique:users',
      'password' => 'required|min:4',
      'age' => 'required',
      'job' => 'required',
      'school' => 'required'
    ]);
         
    $user = new User([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password')),
      'age' => $request->input('age'),
      'job' => $request->input('job'),
      'school' => $request->input('school')
    ]);
        
    $user->save();
        
    return redirect('mypage/index');
  }
        
  public function getProfile() {
    return view('mypage.index');
  }
        
  public function getSignin() {
    return view('user.login');
  }
        
  public function postSignin(Request $request) {
    $this->validate($request,[
      'email' => 'email|required',
      'password' => 'required|min:4'
    ]);
            
    if(Auth::attempt(['email' => $request->input('email'), 
      'password' => $request->input('password')])){
                  
      return redirect('mypage/index');
    }else {
      
      return redirect()->back();
    }
            
            
  }
        
  public function getLogout() {
    Auth::logout();
    return redirect('user/login');
  }
        
  public function edit(Request $request) {
    $user = User::find($request->id);
      if (empty($user)) {
        abort(404);
      }
    return view('user.edit', ['user_form' => $user]);
  }
        
  public function update(Request $request) {
    $this->validate($request, User::$updaterules);
    $user = User::find($request->user_id);
    $user_form = $request->all();
    $user->fill($user_form);

    $user->save();
           
    return redirect('mypage/index');
  }
         
}

