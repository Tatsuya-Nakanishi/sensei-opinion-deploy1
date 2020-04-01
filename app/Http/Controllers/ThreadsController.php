<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Thread;
use App\Comment;



class ThreadsController extends Controller
{
    public function add() {
      return view('threads.create');
    }
    
    public function create(Request $request) {
      
      $this->validate($request, Thread::$rules);

      $threads = new Thread;
      $form = $request->all();
      //dd($form);
      unset($form['_token']);
      $threads->fill($form);
      $threads->user_id = Auth::id();
      $threads->save();
      
      return redirect('threads/create');
    }
    
    public function index(Request $request) {
      if($request->category_id) {
        $threads = Thread::where('category_id', $request->category_id)->orderBy('created_at', 'desc')->get();

      } else {
        $threads = Thread::all();
        $threads = Thread::orderBy('created_at', 'desc')->get();

      }
      
      return view('threads.index' , ['threads' => $threads]);
    }
    
    public function show(Request $request) {
      $thread = Thread::find($request->id);
      return view('comment.index' , ['thread'=> $thread]);
    }
    
    public function edit(Request $request) {
      $threads = Thread::find($request->id);
       if (empty($threads)) {
        abort(404);    
      }
      return view('threads.edit', ['threads_form' => $threads]);
    }
    
    public function update(Request $request) {
      
      $this->validate($request, Thread::$rules);
      $threads = Thread::find($request->thread_id);
      $threads->user_id = Auth::id();
      $threads_form = $request->all();
      
      // 不要なパラメータを削除する。
      unset($threads_form['_token']);
      unset($threads_form['thread_id']);
      $threads->fill($threads_form);
      $threads->save();

      return redirect('threads/index');
    }
    
    public function delete(Request $request) {
      
      $threads = Thread::find($request->id);
      $threads->delete();
      
      return redirect('threads/index');
    }
    
}

