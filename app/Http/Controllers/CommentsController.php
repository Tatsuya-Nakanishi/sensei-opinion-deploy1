<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Thread;
use App\Comment;
use App\User;

class CommentsController extends Controller
{ 
   public function store(Request $request ) {
      $this->validate($request, [
        'comment' => 'required'
      ]);
      $thread_id = $request->id;
      $comment = new Comment(['comment' => $request->comment]);
      $comment->user_id = Auth::id();
      $comment->thread_id = $thread_id;
      
      $comment->save();
      return redirect(route('showthread', ['id' => $thread_id]));
      
   }
   
   public function delete(Request $request) {
      
      $comment = Comment::find($request->id);
     

      $comment->delete();
      
      return redirect('threads/index');


   }
   
}
