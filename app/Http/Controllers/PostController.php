<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formRequest = $request->validate([
            'desc' => ['required', 'min:10'],
            'img' => ['required', 'image', 'mimes:png,jpg,svg']
        ]);

        $formRequest['img'] = $request->file('img')->store('imgs', 'public');
        Post::create($formRequest);


        return to_route('all-posts')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('components.crud.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('components.crud.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $formRequest = $request->validate([
            'desc' => ['required', 'min:10'],
        ]);

        if ($request->hasFile('img')) {
            $formRequest['img'] = $request->file('img')->store('imgs', 'public');
        }
        $post->update($formRequest);


        return to_route('all-posts')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('all-posts')->with('success', 'Post deleted successfully');
    }
}
