<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the available posts.
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('posts.index')->with('posts', $user->posts);
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created post in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'spent_hours' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/', 'max:24'],
            'quality_score' => 'required',
            'feeling' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->spent_hours = $request->input('spent_hours');
        $post->quality_score = $request->input('quality_score');
        $post->feeling = $request->input('feeling');
        $post->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                $imagePath = $image->store('images', 'public');
                $post->image = $imagePath;
            } else {
                //debug
                dd("Error: " . $image->getErrorMessage());
            }
        }
        $post->save();
        return redirect('/posts')->with('success', 'Post created');
    }

    /**
     * Display the selected post.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unautorized Page');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'spent_hours' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/', 'max:24'],
            'quality_score' => 'required',
            'feeling' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);


        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->spent_hours = $request->input('spent_hours');
        $post->quality_score = $request->input('quality_score');
        $post->feeling = $request->input('feeling');
        $post->user_id = auth()->user()->id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                $imagePath = $image->store('images', 'public');
                $post->image = $imagePath;
            } else {
                // debug
                dd("Error: " . $image->getErrorMessage());
            }
        }

        $post->save();
        return redirect('/posts')->with('success', 'Post upated');
    }

    /**
     * Remove the selected post from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unautorized Page');
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post deleted');
    }
}
