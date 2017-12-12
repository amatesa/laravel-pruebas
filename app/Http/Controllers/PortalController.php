<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PortalController extends Controller
{
    public function posts()
    {
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('portal.portal', compact('posts'));
    }
}
