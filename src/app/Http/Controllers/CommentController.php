<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Lightningtalk;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request): mixed
    {
        $comments = Lightningtalk::find($request->lightning_talk_id)->comments;
        return $comments;
    }

    public function store(Request $request): string
    {
        return $request . "store";
    }

    public function show(Comment $comment): string
    {
        return $comment . "show";
    }

    public function update(Request $request, Comment $comment): string
    {
        return $request . $comment . "update";
    }
}
