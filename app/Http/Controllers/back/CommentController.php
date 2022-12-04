<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::paginate(10);
        $unread_comments = Comment::where('read' , 0)->count();

        return view('back.comments.index', compact('comments', 'unread_comments',));
    }


    public function show(Comment $comment) {
        return view('back.comments.show', compact('comment'));
    }
}
