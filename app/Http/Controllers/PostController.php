<?php

// PostController.php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    // PostController.php

    public function index()
    {
        $posts = Post::paginate(7);

        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        $post =  new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');

        $post->save();

        return redirect('posts');

    }
    public function show($id)
    {
        $post = Post::find($id);

        return view('show', compact('post'));
    }

}
